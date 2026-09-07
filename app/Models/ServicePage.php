<?php

namespace App\Models;

use App\Support\PublicMedia;
use App\Support\PublicUrl;
use Illuminate\Database\Eloquent\Model;

class ServicePage extends Model
{
    protected $fillable = [
        'hero_image',
        'hero_heading',
        'services_tagline',
        'services_heading',
        'contact_tagline',
        'contact_heading',
        'contact_paragraph_1',
        'contact_paragraph_2',
    ];

    public static function current(): ?self
    {
        return static::query()->first();
    }

    public function heroImageUrl(): ?string
    {
        $url = PublicMedia::url($this->hero_image);

        return filled($url) ? $url : null;
    }

    public function ctaUrl(?string $value, string $fallback = '#'): string
    {
        return PublicUrl::resolve($value, $fallback);
    }
}
