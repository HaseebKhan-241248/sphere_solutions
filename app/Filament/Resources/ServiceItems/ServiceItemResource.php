<?php

namespace App\Filament\Resources\ServiceItems;

use App\Filament\Resources\ServiceItems\Pages\CreateServiceItem;
use App\Filament\Resources\ServiceItems\Pages\EditServiceItem;
use App\Filament\Resources\ServiceItems\Pages\ListServiceItems;
use App\Filament\Resources\ServiceItems\Schemas\ServiceItemForm;
use App\Filament\Resources\ServiceItems\Tables\ServiceItemsTable;
use App\Models\ServiceItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ServiceItemResource extends Resource
{
    protected static ?string $model = ServiceItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedWrenchScrewdriver;

    protected static string|UnitEnum|null $navigationGroup = 'Services';

    protected static ?string $navigationLabel = 'Services';

    protected static ?string $modelLabel = 'Service';

    protected static ?string $pluralModelLabel = 'Services';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return ServiceItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServiceItemsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServiceItems::route('/'),
            'create' => CreateServiceItem::route('/create'),
            'edit' => EditServiceItem::route('/{record}/edit'),
        ];
    }
}
