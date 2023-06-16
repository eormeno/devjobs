<?php

namespace App\Helpers;

class Config
{
    public static function get($key, $default = null)
    {
        $value = getenv($key);
        if ($value === false) {
            return $default;
        }
        return $value;
    }

    public static function passwordMinLength(): int
    {
        return (int) self::get('PASSWORD_MIN_LENGTH', 8);
    }
}
