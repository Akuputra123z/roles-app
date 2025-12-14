<?php

namespace App\Filament\Resources\Surats\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SuratForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('company_id')
                    ->required()
                    ->numeric(),
                TextInput::make('mitra_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('surat_template_id')
                    ->required()
                    ->numeric(),
                TextInput::make('surat_type_id')
                    ->required()
                    ->numeric(),
                TextInput::make('number')
                    ->default(null),
                DatePicker::make('date')
                    ->required(),
                TextInput::make('subtotal')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('tax')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('total')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Select::make('status')
                    ->options(['draft' => 'Draft', 'sent' => 'Sent', 'paid' => 'Paid'])
                    ->default('draft')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
