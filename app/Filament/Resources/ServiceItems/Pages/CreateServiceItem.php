<?php

namespace App\Filament\Resources\ServiceItems\Pages;

use App\Filament\Resources\ServiceItems\ServiceItemResource;
use App\Models\ServiceItem;
use Filament\Resources\Pages\CreateRecord;

class CreateServiceItem extends CreateRecord
{
    protected static string $resource = ServiceItemResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['faqs'] = ServiceItem::normalizeFaqs($data['faqs'] ?? []);

        return $data;
    }
}
