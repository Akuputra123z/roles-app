<?php

namespace App\Filament\Resources\SuratItems\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SuratItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('surat_id')
                    ->required()
                    ->numeric(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->default(1),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
            ]);
    }
}
