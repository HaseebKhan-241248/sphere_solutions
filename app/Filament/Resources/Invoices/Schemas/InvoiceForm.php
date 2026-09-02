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
use Filament\Schemas\Components\Utilities\Set;
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
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Get $get, Set $set): void {
                        static::recalculateTotals($get, $set);
                    }),
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
                            ->afterStateUpdated(function ($state, Get $get, Set $set, TextInput $component): void {
                                $amount = ($state === null || $state === '') ? 0 : (float) $state;
                                $set('total', $amount);

                                $items = $get('../../items') ?? [];
                                $pathParts = explode('.', $component->getStatePath());
                                $itemKey = $pathParts[count($pathParts) - 2] ?? null;

                                if (is_array($items) && filled($itemKey) && isset($items[$itemKey]) && is_array($items[$itemKey])) {
                                    $items[$itemKey]['price'] = $amount;
                                    $items[$itemKey]['total'] = $amount;
                                }

                                static::recalculateTotals($get, $set, fromItem: true, itemsOverride: is_array($items) ? $items : []);
                            })
                            ->required(),

                        TextInput::make('total')
                            ->numeric()
                            ->live(onBlur: true)
                            ->suffix(fn (Get $get): string => strtoupper((string) ($get('../../currency') ?? '')))
                            ->afterStateUpdated(function ($state, Get $get, Set $set, TextInput $component): void {
                                $amount = ($state === null || $state === '') ? 0 : (float) $state;
                                $items = $get('../../items') ?? [];
                                $pathParts = explode('.', $component->getStatePath());
                                $itemKey = $pathParts[count($pathParts) - 2] ?? null;

                                if (is_array($items) && filled($itemKey) && isset($items[$itemKey]) && is_array($items[$itemKey])) {
                                    $items[$itemKey]['total'] = $amount;
                                }

                                static::recalculateTotals($get, $set, fromItem: true, itemsOverride: is_array($items) ? $items : []);
                            })
                            ->required(),

                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(3)
                    ->defaultItems(1)
                    ->reorderable()
                    ->orderColumn('sort_order')
                    ->live()
                    ->afterStateUpdated(function ($state, Get $get, Set $set): void {
                        static::recalculateTotals($get, $set, fromRepeater: true, itemsOverride: is_array($state) ? $state : []);
                    })
                    ->deleteAction(
                        fn ($action) => $action->after(function (Get $get, Set $set): void {
                            static::recalculateTotals($get, $set, fromRepeater: true);
                        }),
                    )
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

    protected static function recalculateTotals(
        Get $get,
        Set $set,
        bool $fromItem = false,
        bool $fromRepeater = false,
        ?array $itemsOverride = null,
    ): void {
        if ($fromItem) {
            $itemsPath = '../../items';
            $gstPath = '../../gst_rate';
            $subtotalPath = '../../subtotal';
            $gstAmountPath = '../../gst_amount';
            $grandTotalPath = '../../grand_total';
        } elseif ($fromRepeater) {
            $itemsPath = null;
            $gstPath = '../gst_rate';
            $subtotalPath = '../subtotal';
            $gstAmountPath = '../gst_amount';
            $grandTotalPath = '../grand_total';
        } else {
            $itemsPath = 'items';
            $gstPath = 'gst_rate';
            $subtotalPath = 'subtotal';
            $gstAmountPath = 'gst_amount';
            $grandTotalPath = 'grand_total';
        }

        if (is_array($itemsOverride)) {
            $items = $itemsOverride;
        } elseif ($itemsPath === null) {
            $items = $get('.') ?? [];
        } else {
            $items = $get($itemsPath) ?? [];
        }

        if (! is_array($items)) {
            $items = [];
        }

        $subtotal = collect($items)->sum(function ($item): float {
            if (! is_array($item)) {
                return 0.0;
            }

            if (filled($item['total'] ?? null)) {
                return (float) $item['total'];
            }

            return (float) ($item['price'] ?? 0);
        });

        $gstRate = (float) ($get($gstPath) ?? 5);
        $gstAmount = round($subtotal * ($gstRate / 100), 2);
        $grandTotal = round($subtotal + $gstAmount, 2);

        $set($subtotalPath, number_format($subtotal, 2, '.', ''));
        $set($gstAmountPath, number_format($gstAmount, 2, '.', ''));
        $set($grandTotalPath, number_format($grandTotal, 2, '.', ''));
    }
}
