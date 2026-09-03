<?php

namespace App\Filament\Resources\Invoices\Pages;

use App\Filament\Resources\Invoices\InvoiceResource;
use App\Models\Invoice;
use Filament\Resources\Pages\CreateRecord;

class CreateInvoice extends CreateRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (blank($data['invoice_number'] ?? null)) {
            $data['invoice_number'] = Invoice::nextInvoiceNumber();
        }

        return $this->applyTotals($data);
    }

    protected function afterCreate(): void
    {
        $this->record->recalculateTotals();
    }

    private function applyTotals(array $data): array
    {
        $subtotal = collect($data['items'] ?? [])->sum('total');
        $gstRate = (float) ($data['gst_rate'] ?? 5);
        $gst = round($subtotal * ($gstRate / 100), 2);

        $data['subtotal'] = $subtotal;
        $data['gst_amount'] = $gst;
        $data['grand_total'] = $subtotal + $gst;

        return $data;
    }
}
