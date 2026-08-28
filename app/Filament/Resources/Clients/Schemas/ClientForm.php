<?php

namespace App\Filament\Resources\Clients\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Client details')->schema([
                TextInput::make('name')->required()->maxLength(255),
                FileUpload::make('logo')->image()->disk('public')->directory('clients/logos')->maxSize(4096),
                TextInput::make('email')->email(),
                TextInput::make('phone')->tel(),
                Textarea::make('address')->rows(3)->columnSpanFull(),
                Toggle::make('is_active')->default(true),
            ])->columns(2),
        ]);
    }
}
