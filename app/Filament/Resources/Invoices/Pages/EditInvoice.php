<?php

namespace App\Filament\Resources\Invoices\Pages;

use App\Filament\Resources\Invoices\InvoiceResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInvoice extends EditRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('downloadPdf')
                ->label('Download PDF')
                ->icon('heroicon-o-arrow-down-tray')
                ->url(fn (): string => route('admin.invoices.pdf', ['invoice' => $this->record])),
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return $this->applyTotals($data);
    }

    protected function afterSave(): void
    {
        $this->record->recalculateTotals();
        $this->refreshFormData(['subtotal', 'gst_amount', 'grand_total']);
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
