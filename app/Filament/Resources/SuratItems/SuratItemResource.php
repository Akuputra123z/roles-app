<?php

namespace App\Filament\Resources\SuratItems;

use App\Filament\Resources\SuratItems\Pages\CreateSuratItem;
use App\Filament\Resources\SuratItems\Pages\EditSuratItem;
use App\Filament\Resources\SuratItems\Pages\ListSuratItems;
use App\Filament\Resources\SuratItems\Schemas\SuratItemForm;
use App\Filament\Resources\SuratItems\Tables\SuratItemsTable;
use App\Models\SuratItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SuratItemResource extends Resource
{
    protected static ?string $model = SuratItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'SuratItem';

    public static function form(Schema $schema): Schema
    {
        return SuratItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuratItemsTable::configure($table);
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
            'index' => ListSuratItems::route('/'),
            'create' => CreateSuratItem::route('/create'),
            'edit' => EditSuratItem::route('/{record}/edit'),
        ];
    }
}
