<?php

namespace Alexasomba\Paystack\Extras;

use Alexasomba\Paystack\Configuration;

final class Paystack
{
    public static function createConfiguration(string $secretKey, ?string $baseUrl = null): Configuration
    {
        $config = new Configuration();
        $config->setAccessToken($secretKey);
        if ($baseUrl) $config->setHost($baseUrl);
        return $config;
    }
}
