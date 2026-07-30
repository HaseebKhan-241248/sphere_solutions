<?php

namespace App\Filament\Resources\Leads\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(100),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('mobile')
                    ->tel()
                    ->maxLength(30),
                TextInput::make('subject')
                    ->maxLength(200),
                Textarea::make('message')
                    ->required()
                    ->rows(6)
                    ->columnSpanFull(),
            ]);
    }
}
