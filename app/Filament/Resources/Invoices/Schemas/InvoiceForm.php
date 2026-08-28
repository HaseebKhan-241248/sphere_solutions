<?php

namespace App\Filament\Resources\Invoices\Schemas;

use App\Models\Client;
use App\Models\Invoice;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class InvoiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Invoice details')->schema([
                Select::make('client_id')
                    ->label('Client')
                    ->relationship(
                        'client',
                        'name',
                        fn ($query) => $query->where('is_active', true),
                    )
                    ->searchable()
                    ->preload()
                    ->required()
                    ->getOptionLabelFromRecordUsing(fn (Client $record) => $record->name),

                TextInput::make('invoice_number')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->default(fn () => 'TR'.now()->format('ym')),

                DatePicker::make('invoice_date')
                    ->required()
                    ->default(now()),

                TextInput::make('currency')
                    ->label('Currency')
                    ->required()
                    ->maxLength(10)
                    ->placeholder('e.g. CAD')
                    ->live(onBlur: true)
                    ->dehydrateStateUsing(fn (?string $state): ?string => filled($state) ? strtoupper(trim($state)) : null),

                Select::make('status')
                    ->options([
                        Invoice::STATUS_DRAFT => 'Draft',
                        Invoice::STATUS_SENT => 'Sent',
                        Invoice::STATUS_PAID => 'Paid',
                    ])
                    ->default(Invoice::STATUS_DRAFT)
                    ->required(),

                TextInput::make('gst_rate')
                    ->numeric()
                    ->suffix('%')
                    ->default(5)
                    ->required(),
            ])->columns(3)->columnSpanFull(),

            Section::make('Line items')->schema([
                Repeater::make('items')
                    ->relationship()
                    ->schema([
                        Textarea::make('description')
                            ->label('Item description')
                            ->rows(6)
                            ->required()
                            ->columnSpanFull(),

                        TextInput::make('price')
                            ->numeric()
                            ->live(onBlur: true)
                            ->suffix(fn (Get $get): string => strtoupper((string) ($get('../../currency') ?? '')))
                            ->afterStateUpdated(function ($state, callable $set): void {
                                $set('total', $state);
                            })
                            ->required(),

                        TextInput::make('total')
                            ->numeric()
                            ->suffix(fn (Get $get): string => strtoupper((string) ($get('../../currency') ?? '')))
                            ->required(),

                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(3)
                    ->defaultItems(1)
                    ->reorderable()
                    ->orderColumn('sort_order')
                    ->columnSpanFull(),
            ])->columnSpanFull(),

            Section::make('Calculated totals')->schema([
                TextInput::make('subtotal')
                    ->numeric()
                    ->disabled()
                    ->dehydrated()
                    ->suffix(fn (Get $get): string => strtoupper((string) ($get('currency') ?? ''))),
                TextInput::make('gst_amount')
                    ->numeric()
                    ->disabled()
                    ->dehydrated()
                    ->suffix(fn (Get $get): string => strtoupper((string) ($get('currency') ?? ''))),
                TextInput::make('grand_total')
                    ->label('Grand Total')
                    ->numeric()
                    ->disabled()
                    ->dehydrated()
                    ->suffix(fn (Get $get): string => strtoupper((string) ($get('currency') ?? ''))),
            ])->columns(3)->columnSpanFull(),
        ]);
    }
}
