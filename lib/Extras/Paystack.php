<?php

namespace Alexasomba\Paystack\Extras;

use Alexasomba\Paystack\Configuration;
use Alexasomba\Paystack\HeaderSelector;
use GuzzleHttp\ClientInterface;

final class Paystack
{
    public static function createConfiguration(string $secretKey, ?string $baseUrl = null): Configuration
    {
        $config = new Configuration();
        $config->setAccessToken($secretKey);
        if ($baseUrl) $config->setHost($baseUrl);
        return $config;
    }

    /** @param array<string, mixed> $options */
    public static function createHttpClient(array $options = []): ClientInterface
    {
        return HttpClientFactory::create($options);
    }

    /**
     * @template T of object
     * @param class-string<T> $apiClass
     * @param array<string, mixed> $httpOptions
     * @return T
     */
    public static function createApi(
        string $apiClass,
        string $secretKey,
        array $httpOptions = [],
        ?string $baseUrl = null
    ): object {
        return new $apiClass(
            self::createHttpClient($httpOptions),
            self::createConfiguration($secretKey, $baseUrl),
            new HeaderSelector()
        );
    }
}
