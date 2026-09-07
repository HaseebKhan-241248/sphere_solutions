<?php

namespace App\Models;

use App\Support\PublicMedia;
use App\Support\PublicUrl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ServiceItem extends Model
{
    private const DEFAULT_IMAGE = 'images/about-hero.jpg';

    protected $fillable = [
        'slug',
        'icon',
        'title',
        'description',
        'link_text',
        'link_url',
        'detail_hero_image',
        'detail_image',
        'detail_heading',
        'detail_paragraph_1',
        'detail_paragraph_2',
        'faqs',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'faqs' => 'array',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (self $service): void {
            if (blank($service->slug) && filled($service->title)) {
                $service->slug = static::uniqueSlug(Str::slug($service->title));
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('title');
    }

    public static function uniqueSlug(string $base): string
    {
        $slug = $base !== '' ? $base : 'service';
        $original = $slug;
        $counter = 2;

        while (static::query()->where('slug', $slug)->exists()) {
            $slug = $original.'-'.$counter++;
        }

        return $slug;
    }

    /**
     * @param  array<int, mixed>  $faqs
     * @return array<int, array{question: string, answer: string}>
     */
    public static function normalizeFaqs(array $faqs): array
    {
        return array_values(array_filter(array_map(function ($faq): ?array {
            if (! is_array($faq)) {
                return null;
            }

            $question = trim((string) ($faq['question'] ?? ''));
            $answer = trim((string) ($faq['answer'] ?? ''));

            if ($question === '' || $answer === '') {
                return null;
            }

            return compact('question', 'answer');
        }, $faqs)));
    }

    /**
     * @param  array<int, mixed>  $faqs
     * @return array<int, array{question: string, answer: string}>
     */
    public static function faqsForForm(array $faqs): array
    {
        return array_map(fn ($faq): array => [
            'question' => (string) (is_array($faq) ? ($faq['question'] ?? '') : ''),
            'answer' => (string) (is_array($faq) ? ($faq['answer'] ?? '') : $faq),
        ], array_values($faqs));
    }

    public function iconUrl(): string
    {
        return PublicMedia::url($this->icon);
    }

    public function detailHeroImageUrl(): string
    {
        return PublicMedia::urlOrDefault($this->detail_hero_image, self::DEFAULT_IMAGE);
    }

    public function detailImageUrl(): string
    {
        return PublicMedia::urlOrDefault($this->detail_image, self::DEFAULT_IMAGE);
    }

    public function detailUrl(): string
    {
        return route('services.show', $this->slug);
    }

    public function linkHref(): string
    {
        return filled($this->link_url)
            ? PublicUrl::resolve($this->link_url)
            : $this->detailUrl();
    }
}
