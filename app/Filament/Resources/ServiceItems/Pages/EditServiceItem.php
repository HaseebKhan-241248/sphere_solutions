<?php

namespace App\Filament\Resources\ServiceItems\Pages;

use App\Filament\Resources\ServiceItems\ServiceItemResource;
use App\Models\ServiceItem;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServiceItem extends EditRecord
{
    protected static string $resource = ServiceItemResource::class;

    protected function getHeaderActions(): array
    {
        return [DeleteAction::make()];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['faqs'] = ServiceItem::faqsForForm($data['faqs'] ?? []);

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['faqs'] = ServiceItem::normalizeFaqs($data['faqs'] ?? []);

        return $data;
    }
}
