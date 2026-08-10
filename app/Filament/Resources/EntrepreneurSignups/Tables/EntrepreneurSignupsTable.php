<?php

namespace App\Filament\Resources\EntrepreneurSignups\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EntrepreneurSignupsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable()
                    ->copyable(),
                TextColumn::make('location')
                    ->label('Country / City')
                    ->searchable()
                    ->limit(30),
                TextColumn::make('main_skill')
                    ->label('Main Skill')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('additional_skills')
                    ->label('Additional Skills')
                    ->limit(30)
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->placeholder('—'),
                TextColumn::make('portfolio_url')
                    ->label('Portfolio')
                    ->limit(30)
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->placeholder('—'),
                IconColumn::make('consent')
                    ->boolean()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Submitted')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([])
            ->recordActions([
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
