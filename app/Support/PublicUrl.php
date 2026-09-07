<?php

namespace App\Support;

use Illuminate\Support\Facades\Route;

class PublicUrl
{
    public static function resolve(?string $value, string $fallback = '#'): string
    {
        $value = filled($value) ? trim($value) : $fallback;

        if (blank($value)) {
            return '#';
        }

        if (
            str_starts_with($value, 'http://')
            || str_starts_with($value, 'https://')
            || str_starts_with($value, '/')
            || str_starts_with($value, '#')
        ) {
            return $value;
        }

        return Route::has($value) ? route($value) : $value;
    }
}
