<?php

namespace App\Filament\Resources\EntrepreneurSignups;

use App\Filament\Resources\EntrepreneurSignups\Pages\ListEntrepreneurSignups;
use App\Filament\Resources\EntrepreneurSignups\Pages\ViewEntrepreneurSignup;
use App\Filament\Resources\EntrepreneurSignups\Schemas\EntrepreneurSignupInfolist;
use App\Filament\Resources\EntrepreneurSignups\Tables\EntrepreneurSignupsTable;
use App\Models\EntrepreneurSignup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class EntrepreneurSignupResource extends Resource
{
    protected static ?string $model = EntrepreneurSignup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedGlobeAlt;

    protected static string|UnitEnum|null $navigationGroup = 'CRM';

    protected static ?string $navigationLabel = 'Entrepreneur Signups';

    protected static ?string $modelLabel = 'Entrepreneur Signup';

    protected static ?string $pluralModelLabel = 'Entrepreneur Signups';

    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'name';

    public static function infolist(Schema $schema): Schema
    {
        return EntrepreneurSignupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EntrepreneurSignupsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit($record): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEntrepreneurSignups::route('/'),
            'view' => ViewEntrepreneurSignup::route('/{record}'),
        ];
    }
}
