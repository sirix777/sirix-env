<?php

declare(strict_types=1);

namespace Sirix\Env;

use function is_numeric;
use function str_contains;
use function strtolower;
use function trim;

final class EnvParser
{
    public static function parse(string $value): mixed
    {
        $trimmed = trim($value);
        $lower = strtolower($trimmed);

        return match ($lower) {
            'true', '(true)' => true,
            'false', '(false)' => false,
            'empty', '(empty)' => '',
            'null', '(null)' => null,
            default => is_numeric($trimmed) ? (str_contains($trimmed, '.') ? (float) $trimmed : (int) $trimmed) : $trimmed,
        };
    }
}
