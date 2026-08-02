<?php

namespace App\Support;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SiteSettings
{
    public const CACHE_KEY = 'site_settings';

    public const LOGO_DESKTOP = 'site_logo_desktop';

    public const LOGO_MOBILE = 'site_logo_mobile';

    public const ADDRESS = 'site_address';

    public const PHONE = 'site_phone';

    public const EMAIL = 'site_email';

    public const FACEBOOK_URL = 'site_facebook_url';

    public const TWITTER_URL = 'site_twitter_url';

    public const INSTAGRAM_URL = 'site_instagram_url';

    public const LINKEDIN_URL = 'site_linkedin_url';

    public const WHATSAPP_ENABLED = 'site_whatsapp_enabled';

    public const WHATSAPP_NUMBER = 'site_whatsapp_number';

    public const WHATSAPP_LABEL = 'site_whatsapp_label';

    public const WHATSAPP_MESSAGE = 'site_whatsapp_message';

    /**
     * @return array<string, string|null>
     */
    public static function defaults(): array
    {
        return [
            self::LOGO_DESKTOP => null,
            self::LOGO_MOBILE => null,
            self::ADDRESS => 'Vancouver, BC, Canada',
            self::PHONE => '+1 (604) 313-7091',
            self::EMAIL => 'info@spheremarketingsolutions.com',
            self::FACEBOOK_URL => 'https://www.facebook.com/profile.php?id=61558581241296',
            self::TWITTER_URL => 'https://x.com/SpMarkSolutions',
            self::INSTAGRAM_URL => null,
            self::LINKEDIN_URL => 'https://www.linkedin.com/in/sm-solutions/',
            self::WHATSAPP_ENABLED => '0',
            self::WHATSAPP_NUMBER => '16043137091',
            self::WHATSAPP_LABEL => 'Need Help? Chat with us',
            self::WHATSAPP_MESSAGE => 'Hi, I would like to know more about your services.',
        ];
    }

    /**
     * @return list<string>
     */
    public static function keys(): array
    {
        return array_keys(static::defaults());
    }

    /**
     * @return array<string, string|null>
     */
    public static function all(): array
    {
        return Cache::rememberForever(self::CACHE_KEY, function (): array {
            $defaults = static::defaults();
            $stored = Setting::query()
                ->whereIn('key', static::keys())
                ->pluck('value', 'key')
                ->all();

            $merged = [];
            foreach ($defaults as $key => $default) {
                $value = $stored[$key] ?? null;
                $merged[$key] = filled($value) ? $value : $default;
            }

            return $merged;
        });
    }

    public static function get(string $key, ?string $default = null): ?string
    {
        $all = static::all();

        if (array_key_exists($key, $all) && filled($all[$key])) {
            return $all[$key];
        }

        return $default ?? (static::defaults()[$key] ?? null);
    }

    /**
     * @param  array<string, mixed>  $values
     */
    public static function saveMany(array $values): void
    {
        foreach (static::keys() as $key) {
            if (! array_key_exists($key, $values)) {
                continue;
            }

            $value = $values[$key];

            if (is_bool($value)) {
                $value = $value ? '1' : '0';
            }

            if (is_array($value)) {
                $value = $value[0] ?? null;
            }

            Setting::setValue($key, filled($value) ? (string) $value : null);
        }

        static::forgetCache();
    }

    public static function forgetCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }

    /**
     * @return array<string, mixed>
     */
    public static function formState(): array
    {
        $state = static::all();
        $state[self::WHATSAPP_ENABLED] = ($state[self::WHATSAPP_ENABLED] ?? '0') === '1';

        return $state;
    }

    public static function logoDesktopUrl(): string
    {
        return static::resolveAssetUrl(
            static::get(self::LOGO_DESKTOP),
            'images/sphere_logo.png',
        );
    }

    public static function logoMobileUrl(): string
    {
        return static::resolveAssetUrl(
            static::get(self::LOGO_MOBILE),
            'images/sphere_logo.png',
        );
    }

    public static function phoneTel(): string
    {
        $digits = preg_replace('/\D+/', '', (string) static::get(self::PHONE, '')) ?? '';

        if ($digits === '') {
            return '';
        }

        return '+'.$digits;
    }

    public static function whatsappEnabled(): bool
    {
        return static::get(self::WHATSAPP_ENABLED, '0') === '1'
            && filled(static::whatsappDigits());
    }

    public static function whatsappDigits(): string
    {
        return preg_replace('/\D+/', '', (string) static::get(self::WHATSAPP_NUMBER, '')) ?? '';
    }

    public static function whatsappUrl(): ?string
    {
        $digits = static::whatsappDigits();

        if ($digits === '') {
            return null;
        }

        $url = 'https://wa.me/'.$digits;
        $message = trim((string) static::get(self::WHATSAPP_MESSAGE, ''));

        if ($message !== '') {
            $url .= '?text='.rawurlencode($message);
        }

        return $url;
    }

    private static function resolveAssetUrl(?string $path, string $fallback): string
    {
        if (blank($path)) {
            return asset($fallback);
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (str_starts_with($path, 'images/')) {
            return asset($path);
        }

        return Storage::disk('public')->url($path);
    }
}
