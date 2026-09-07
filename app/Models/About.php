<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    protected $fillable = [
        'hero_image',
        'hero_heading',
        'features_tagline',
        'features_heading',
        'features',
        'about_image',
        'about_tagline',
        'about_heading',
        'about_description',
        'about_highlights',
        'about_cta_text',
        'about_cta_url',
    ];

    protected function casts(): array
    {
        return [
            'features' => 'array',
            'about_highlights' => 'array',
        ];
    }

    public static function current(): ?self
    {
        return static::query()->first();
    }

    public function heroImageUrl(): ?string
    {
        $url = $this->mediaUrl($this->hero_image);

        return filled($url) ? $url : null;
    }

    public function aboutImageUrl(): ?string
    {
        $url = $this->mediaUrl($this->about_image);

        return filled($url) ? $url : null;
    }

    public function mediaUrl(?string $path): string
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

    public function ctaUrl(?string $value, string $fallback = '#'): string
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

        if (Route::has($value)) {
            return route($value);
        }

        return $value;
    }
}
