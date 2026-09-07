<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class Home extends Model
{
    protected $fillable = [
        'hero_video',
        'hero_tagline',
        'hero_heading',
        'hero_subheading',
        'hero_primary_cta_text',
        'hero_primary_cta_url',
        'hero_secondary_cta_text',
        'hero_secondary_cta_url',
        'benefits_heading',
        'benefits',
        'about_image',
        'about_tagline',
        'about_heading',
        'about_description',
        'about_features',
        'about_cta_text',
        'about_cta_url',
        'contact_tagline',
        'contact_heading',
        'contact_paragraph_1',
        'contact_paragraph_2',
    ];

    protected function casts(): array
    {
        return [
            'benefits' => 'array',
            'about_features' => 'array',
        ];
    }

    public static function current(): ?self
    {
        return static::query()->first();
    }

    public function heroVideoUrl(): ?string
    {
        $url = $this->mediaUrl($this->hero_video);

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
