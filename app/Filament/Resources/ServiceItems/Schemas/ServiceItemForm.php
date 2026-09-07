<?php

namespace App\Filament\Resources\ServiceItems\Schemas;

use App\Models\ServiceItem;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Listing card')
                    ->schema([
                        FileUpload::make('icon')
                            ->label('Icon')
                            ->image()
                            ->disk('public')
                            ->directory('services/icons')
                            ->maxSize(2048),
                        TextInput::make('title')
                            ->required()
                            ->maxLength(120)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (?string $state, callable $set, ?string $operation, ?ServiceItem $record): void {
                                if ($operation === 'create' && blank($record?->slug)) {
                                    $set('slug', ServiceItem::uniqueSlug(Str::slug((string) $state)));
                                }
                            }),
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(120)
                            ->unique(ignoreRecord: true)
                            ->helperText('Used in the detail page URL.'),
                        Textarea::make('description')
                            ->rows(4)
                            ->columnSpanFull(),
                        TextInput::make('link_text')
                            ->label('Button text')
                            ->maxLength(80)
                            ->default('Read More'),
                        TextInput::make('link_url')
                            ->label('Custom button link')
                            ->maxLength(255)
                            ->helperText('Leave empty to link to this service detail page.'),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(2),

                Section::make('Detail page')
                    ->schema([
                        FileUpload::make('detail_hero_image')
                            ->label('Hero image')
                            ->image()
                            ->disk('public')
                            ->directory('services/detail/hero')
                            ->maxSize(4096),
                        FileUpload::make('detail_image')
                            ->label('Main image')
                            ->image()
                            ->disk('public')
                            ->directory('services/detail/main')
                            ->maxSize(4096),
                        TextInput::make('detail_heading')
                            ->label('Heading')
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('detail_paragraph_1')
                            ->label('First paragraph')
                            ->rows(4)
                            ->columnSpanFull(),
                        Textarea::make('detail_paragraph_2')
                            ->label('Second paragraph')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('FAQs')
                    ->schema([
                        Repeater::make('faqs')
                            ->label('Questions')
                            ->schema([
                                TextInput::make('question')
                                    ->label('Question')
                                    ->required()
                                    ->maxLength(255)
                                    ->prefix('Q:'),
                                Textarea::make('answer')
                                    ->label('Answer')
                                    ->required()
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ])
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed(true)
                            ->itemLabel(fn (array $state): ?string => $state['question'] ?? 'FAQ')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
