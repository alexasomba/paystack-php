<?php

namespace Alexasomba\Paystack\Extras;

final class RequestId
{
    public const DEFAULT_HEADERS = [
        'x-paystack-request-id',
        'x-request-id',
    ];

    /** @param array<string, string[]>|null $headers */
    public static function fromHeaders(?array $headers): ?string
    {
        if (!$headers) return null;

        // Normalize to lowercase keys.
        $normalized = [];
        foreach ($headers as $k => $v) {
            $normalized[strtolower((string) $k)] = $v;
        }

        foreach (self::DEFAULT_HEADERS as $name) {
            $values = $normalized[$name] ?? null;
            if (is_array($values) && count($values) > 0) {
                $candidate = trim((string) $values[0]);
                if ($candidate !== '') return $candidate;
            }
        }

        return null;
    }
}
