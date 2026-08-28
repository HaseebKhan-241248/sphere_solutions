<?php

namespace App\Support;

use Illuminate\Support\Facades\Storage;

class PdfImage
{
    public static function toDataUri(?string $pathOrUrl): ?string
    {
        if (blank($pathOrUrl)) {
            return null;
        }

        $filePath = static::resolveLocalPath($pathOrUrl);

        if ($filePath === null || ! is_file($filePath)) {
            return null;
        }

        $contents = file_get_contents($filePath);

        if ($contents === false) {
            return null;
        }

        $mime = mime_content_type($filePath) ?: 'image/png';

        return 'data:'.$mime.';base64,'.base64_encode($contents);
    }

    private static function resolveLocalPath(string $pathOrUrl): ?string
    {
        if (str_starts_with($pathOrUrl, 'data:')) {
            return null;
        }

        if (str_starts_with($pathOrUrl, 'http://') || str_starts_with($pathOrUrl, 'https://')) {
            $publicStorageUrl = rtrim(Storage::disk('public')->url(''), '/').'/';

            if (str_starts_with($pathOrUrl, $publicStorageUrl)) {
                $relative = ltrim(str_replace($publicStorageUrl, '', $pathOrUrl), '/');

                return Storage::disk('public')->path($relative);
            }

            $assetBase = rtrim(asset(''), '/').'/';

            if (str_starts_with($pathOrUrl, $assetBase)) {
                return public_path(ltrim(str_replace($assetBase, '', $pathOrUrl), '/'));
            }

            return null;
        }

        if (Storage::disk('public')->exists($pathOrUrl)) {
            return Storage::disk('public')->path($pathOrUrl);
        }

        if (str_starts_with($pathOrUrl, 'images/') && is_file(public_path($pathOrUrl))) {
            return public_path($pathOrUrl);
        }

        if (is_file(public_path($pathOrUrl))) {
            return public_path($pathOrUrl);
        }

        return null;
    }
}
