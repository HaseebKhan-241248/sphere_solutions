<?php

namespace App\Support;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class InvoiceSettings
{
    public const CACHE_KEY = 'invoice_settings';

    public const PAYMENT_INSTRUCTIONS = 'invoice_payment_instructions';
    public const NOTES = 'invoice_notes';

    public static function defaults(): array
    {
        return [
            self::PAYMENT_INSTRUCTIONS => "Go to Sphere Marketing Solutions Website\nClick on Packages to view the pricing plans\nChoose the Standard Package from the pricing plans\nPay the invoice total shown above.",
            self::NOTES => 'Sphere marketing solutions Inc. is incorporated in Canada, however the company serves clients in both US and Canada.',
        ];
    }

    public static function keys(): array
    {
        return array_keys(static::defaults());
    }

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
                $merged[$key] = filled($stored[$key] ?? null) ? $stored[$key] : $default;
            }

            return $merged;
        });
    }

    public static function get(string $key): ?string
    {
        return static::all()[$key] ?? null;
    }

    public static function saveMany(array $values): void
    {
        foreach (static::keys() as $key) {
            if (array_key_exists($key, $values)) {
                Setting::setValue($key, (string) $values[$key]);
            }
        }

        Cache::forget(self::CACHE_KEY);
    }

    public static function formState(): array
    {
        return static::all();
    }
}
