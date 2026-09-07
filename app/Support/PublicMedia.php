<?php

namespace App\Support;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class PublicMedia
{
    public static function url(?string $path): string
    {
        if (blank($path)) {
            return '';
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (
            str_starts_with($path, 'images/')
            || str_starts_with($path, 'videos/')
            || str_starts_with($path, '/')
        ) {
            return asset(ltrim($path, '/'));
        }

        return Storage::disk('public')->url($path);
    }

    public static function urlOrDefault(?string $path, string $defaultAsset): string
    {
        $url = static::url($path);

        return filled($url) ? $url : asset($defaultAsset);
    }
}
