<?php

namespace App\Filament\Resources\EntrepreneurSignups\Pages;

use App\Filament\Resources\EntrepreneurSignups\EntrepreneurSignupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEntrepreneurSignup extends ViewRecord
{
    protected static string $resource = EntrepreneurSignupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
