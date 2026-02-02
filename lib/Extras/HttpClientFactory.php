<?php

namespace Alexasomba\Paystack\Extras;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Throwable;

final class HttpClientFactory
{
    /**
     * @param array{
     *   timeoutSeconds?: float,
     *   connectTimeoutSeconds?: float,
     *   retry?: array{
     *     retries?: int,
     *     minDelayMs?: int,
     *     maxDelayMs?: int,
     *     retryOnStatuses?: int[],
     *     retryOnMethods?: string[],
     *   },
     *   idempotency?: array{
     *     enabled?: bool,
     *     header?: string,
     *     key?: string,
     *     auto?: bool,
     *   }
     * } $options
     */
    public static function create(array $options = []): ClientInterface
    {
        $retry = $options['retry'] ?? [];
        $retries = (int) ($retry['retries'] ?? 2);
        $minDelayMs = (int) ($retry['minDelayMs'] ?? 250);
        $maxDelayMs = (int) ($retry['maxDelayMs'] ?? 2000);
        $retryOnStatuses = $retry['retryOnStatuses'] ?? [408, 429, 500, 502, 503, 504];
        $retryOnMethods = array_map('strtoupper', $retry['retryOnMethods'] ?? ['GET', 'HEAD', 'OPTIONS']);

        $idempotency = $options['idempotency'] ?? [];
        $idempotencyEnabled = (bool) ($idempotency['enabled'] ?? false);
        $idempotencyHeader = (string) ($idempotency['header'] ?? Idempotency::DEFAULT_HEADER);
        $idempotencyStaticKey = $idempotency['key'] ?? null;
        $idempotencyAuto = (bool) ($idempotency['auto'] ?? false);

        $stack = HandlerStack::create();

        // Ensure Idempotency-Key is present on POST when enabled.
        $stack->push(function (callable $handler) use ($idempotencyEnabled, $idempotencyHeader, $idempotencyStaticKey, $idempotencyAuto) {
            return function (RequestInterface $request, array $options) use ($handler, $idempotencyEnabled, $idempotencyHeader, $idempotencyStaticKey, $idempotencyAuto) {
                if ($idempotencyEnabled && strtoupper($request->getMethod()) === 'POST' && !$request->hasHeader($idempotencyHeader)) {
                    $key = null;
                    if (is_string($idempotencyStaticKey) && $idempotencyStaticKey !== '') $key = $idempotencyStaticKey;
                    if ($key === null && $idempotencyAuto) $key = Idempotency::createKey();
                    if ($key !== null) $request = $request->withHeader($idempotencyHeader, $key);
                }
                return $handler($request, $options);
            };
        }, 'paystack_idempotency');

        $decider = function (
            int $retriesDone,
            RequestInterface $request,
            ?ResponseInterface $response = null,
            ?Throwable $exception = null
        ) use ($retries, $retryOnStatuses, $retryOnMethods, $idempotencyHeader): bool {
            if ($retriesDone >= $retries) return false;

            $method = strtoupper($request->getMethod());
            $canRetry = in_array($method, $retryOnMethods, true);

            // Allow POST retries only with an idempotency key.
            if ($method === 'POST') {
                $canRetry = $request->hasHeader($idempotencyHeader);
            }

            if (!$canRetry) return false;

            if ($exception) {
                // Connection-level errors are retryable.
                return true;
            }

            if ($response) {
                return in_array($response->getStatusCode(), $retryOnStatuses, true);
            }

            return false;
        };

        $delay = function (
            int $retriesDone,
            ?ResponseInterface $response = null
        ) use ($minDelayMs, $maxDelayMs): int {
            $retryAfterMs = 0;
            if ($response && $response->getStatusCode() === 429) {
                $ra = $response->getHeaderLine('retry-after');
                if ($ra !== '') {
                    $seconds = intval($ra);
                    if ($seconds >= 0) $retryAfterMs = $seconds * 1000;
                }
            }

            $backoffBase = min($maxDelayMs, (int) ($minDelayMs * (2 ** max(0, $retriesDone - 1))));
            $jitter = 0.5 + (mt_rand() / mt_getrandmax());
            $backoffMs = (int) min($maxDelayMs, floor($backoffBase * $jitter));

            return (int) min($maxDelayMs, max($backoffMs, $retryAfterMs));
        };

        $stack->push(Middleware::retry($decider, $delay), 'paystack_retry');

        $clientOptions = [
            'handler' => $stack,
        ];

        if (isset($options['timeoutSeconds'])) {
            $clientOptions['timeout'] = (float) $options['timeoutSeconds'];
        }
        if (isset($options['connectTimeoutSeconds'])) {
            $clientOptions['connect_timeout'] = (float) $options['connectTimeoutSeconds'];
        }

        return new Client($clientOptions);
    }
}
