<?php

namespace Alexasomba\Paystack\Extras;

use Alexasomba\Paystack\ApiException;
use Throwable;

final class PaystackApiError extends \RuntimeException
{
    public ?int $statusCode;
    public ?string $url;
    public ?string $requestId;

    /** @var array<string, string[]>|null */
    public ?array $responseHeaders;

    /** @var mixed */
    public $responseBody;

    public static function fromThrowable(Throwable $e, ?string $url = null): self
    {
        $statusCode = null;
        $headers = null;
        $body = null;
        $requestId = null;

        if ($e instanceof ApiException) {
            $statusCode = $e->getCode() ?: null;
            $headers = $e->getResponseHeaders();
            $body = $e->getResponseBody();
            $requestId = RequestId::fromHeaders($headers);
        }

        $suffix = $requestId ? " (requestId: {$requestId})" : "";
        $message = "Paystack API request failed" . $suffix;
        if ($statusCode) $message .= " with status {$statusCode}";

        $out = new self($message, (int) ($statusCode ?? 0), $e);
        $out->statusCode = $statusCode;
        $out->url = $url;
        $out->requestId = $requestId;
        $out->responseHeaders = $headers;
        $out->responseBody = $body;
        return $out;
    }
}
