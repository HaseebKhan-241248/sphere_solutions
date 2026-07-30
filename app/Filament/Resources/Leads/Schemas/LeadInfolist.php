<?php

namespace App\Filament\Resources\Leads\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LeadInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->copyable(),
                TextEntry::make('mobile')
                    ->placeholder('—'),
                TextEntry::make('subject')
                    ->placeholder('—'),
                TextEntry::make('message')
                    ->columnSpanFull()
                    ->prose(),
                TextEntry::make('created_at')
                    ->label('Submitted at')
                    ->dateTime(),
            ]);
    }
}
