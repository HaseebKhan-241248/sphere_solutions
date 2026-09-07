<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Client extends Model
{
    protected $fillable = [
        'name', 'logo', 'email', 'phone', 'address', 'is_active',
    ];

    protected function casts(): array
    {
        return ['is_active' => 'boolean'];
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function logoUrl(): ?string
    {
        if (blank($this->logo)) {
            return null;
        }

        if (str_starts_with($this->logo, 'http://') || str_starts_with($this->logo, 'https://')) {
            return $this->logo;
        }

        return Storage::disk('public')->url($this->logo);
    }

    public function invoicePrefix(): string
    {
        $parts = array_values(array_filter(preg_split('/\s+/', trim((string) $this->name)) ?: []));

        if (count($parts) >= 2) {
            return strtoupper(substr($parts[0], 0, 1).substr($parts[array_key_last($parts)], 0, 1));
        }

        if (count($parts) === 1) {
            $word = $parts[0];

            return strtoupper(substr($word, 0, 1).substr($word, 1, 1));
        }

        return 'XX';
    }
}
