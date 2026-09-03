<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    public const STATUS_DRAFT = 'draft';

    public const STATUS_SENT = 'sent';

    public const STATUS_PAID = 'paid';

    public const NUMBER_PREFIX = 'TR';

    protected $fillable = [
        'client_id',
        'invoice_number',
        'invoice_date',
        'currency',
        'subtotal',
        'gst_rate',
        'gst_amount',
        'grand_total',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'invoice_date' => 'date',
            'subtotal' => 'decimal:2',
            'gst_rate' => 'decimal:2',
            'gst_amount' => 'decimal:2',
            'grand_total' => 'decimal:2',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (Invoice $invoice): void {
            if (filled($invoice->invoice_number)) {
                $invoice->invoice_number = strtoupper(trim((string) $invoice->invoice_number));

                return;
            }

            if (! $invoice->exists) {
                $invoice->invoice_number = static::nextInvoiceNumber();
            }
        });
    }

    public static function nextInvoiceNumber(): string
    {
        $prefix = self::NUMBER_PREFIX;
        $max = 0;

        $numbers = static::query()
            ->where('invoice_number', 'like', $prefix.'%')
            ->pluck('invoice_number');

        foreach ($numbers as $number) {
            if (preg_match('/^'.preg_quote($prefix, '/').'(\d+)$/i', (string) $number, $matches)) {
                $max = max($max, (int) $matches[1]);
            }
        }

        $next = $max + 1;

        return $prefix.str_pad((string) $next, max(3, strlen((string) $next)), '0', STR_PAD_LEFT);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(InvoiceItem::class)->orderBy('sort_order');
    }

    public function formatAmount(float|string|null $amount): string
    {
        $formatted = number_format((float) ($amount ?? 0), 2);
        $currency = trim((string) $this->currency);

        return $currency !== '' ? "{$formatted} {$currency}" : $formatted;
    }

    public function recalculateTotals(): void
    {
        $subtotal = $this->items()->sum('total');
        $gst = round($subtotal * ($this->gst_rate / 100), 2);

        $this->update([
            'subtotal' => $subtotal,
            'gst_amount' => $gst,
            'grand_total' => $subtotal + $gst,
        ]);
    }
}
