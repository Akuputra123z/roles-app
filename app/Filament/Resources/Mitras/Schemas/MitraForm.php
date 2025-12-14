<?php

namespace App\Filament\Resources\Mitras\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Facades\Filament;

class MitraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('company_id')
                    ->default(fn () => Filament::auth()->user()?->company_id)
                    ->dehydrated(true),

                TextInput::make('name')
                    ->label('Nama Perusahaan')
                    ->required()
                    ->maxLength(255),

                TextInput::make('name_mitra')
                    ->label('Nama Mitra')
                    ->required()
                    ->maxLength(255),

                TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),

                TextInput::make('nip')
                    ->label('NIP / Identitas')
                    ->required()
                    ->maxLength(100),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->nullable(),

                TextInput::make('phone')
                    ->label('No. Telepon')
                    ->tel()
                    ->nullable(),

                Textarea::make('address')
                    ->label('Alamat')
                    ->nullable()
                    ->columnSpanFull(),
            ]);
    }
}
