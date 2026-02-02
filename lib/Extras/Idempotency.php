<?php

namespace Alexasomba\Paystack\Extras;

final class Idempotency
{
    public const DEFAULT_HEADER = 'Idempotency-Key';

    public static function createKey(): string
    {
        return bin2hex(random_bytes(16));
    }
}
