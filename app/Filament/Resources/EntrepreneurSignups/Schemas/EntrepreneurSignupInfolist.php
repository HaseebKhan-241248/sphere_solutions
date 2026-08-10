<?php

namespace App\Filament\Resources\EntrepreneurSignups\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EntrepreneurSignupInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->copyable(),
                TextEntry::make('location')
                    ->label('Country / City'),
                TextEntry::make('main_skill')
                    ->label('Main Skill'),
                TextEntry::make('additional_skills')
                    ->label('Additional Skills')
                    ->placeholder('—'),
                TextEntry::make('portfolio_url')
                    ->label('LinkedIn / Portfolio')
                    ->url(fn (?string $state): ?string => $state)
                    ->openUrlInNewTab()
                    ->placeholder('—'),
                TextEntry::make('message')
                    ->columnSpanFull()
                    ->prose()
                    ->placeholder('—'),
                IconEntry::make('consent')
                    ->boolean(),
                TextEntry::make('submitted_from')
                    ->label('Submitted From')
                    ->placeholder('—'),
                TextEntry::make('created_at')
                    ->label('Submission Date')
                    ->dateTime(),
            ]);
    }
}
