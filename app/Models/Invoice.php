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
