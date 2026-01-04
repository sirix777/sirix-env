<?php

declare(strict_types=1);

namespace Sirix\Env;

use function function_exists;
use function getenv;

if (! function_exists('env')) {
    function env(string $key, mixed $default = null): mixed
    {
        $value = getenv($key);

        if (false === $value) {
            return $default;
        }

        return EnvParser::parse($value);
    }
}
