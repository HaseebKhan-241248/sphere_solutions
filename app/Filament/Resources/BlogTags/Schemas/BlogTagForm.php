<?php

namespace App\Filament\Resources\BlogTags\Schemas;

use App\Models\BlogTag;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BlogTagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Tag')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(120)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (?string $state, callable $set, ?BlogTag $record): void {
                                if ($record?->exists) {
                                    return;
                                }

                                if (blank($state)) {
                                    return;
                                }

                                $set('slug', BlogTag::uniqueSlug(Str::slug($state)));
                            }),
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(120)
                            ->unique(ignoreRecord: true),
                    ])
                    ->columns(2),
            ]);
    }
}
