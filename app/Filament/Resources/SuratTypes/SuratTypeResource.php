<?php

namespace App\Filament\Resources\SuratTypes;

use App\Filament\Resources\SuratTypes\Pages\CreateSuratType;
use App\Filament\Resources\SuratTypes\Pages\EditSuratType;
use App\Filament\Resources\SuratTypes\Pages\ListSuratTypes;
use App\Filament\Resources\SuratTypes\Schemas\SuratTypeForm;
use App\Filament\Resources\SuratTypes\Tables\SuratTypesTable;
use App\Models\SuratType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SuratTypeResource extends Resource
{
    protected static ?string $model = SuratType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'SuratType';

    public static function form(Schema $schema): Schema
    {
        return SuratTypeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuratTypesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSuratTypes::route('/'),
            'create' => CreateSuratType::route('/create'),
            'edit' => EditSuratType::route('/{record}/edit'),
        ];
    }
}
