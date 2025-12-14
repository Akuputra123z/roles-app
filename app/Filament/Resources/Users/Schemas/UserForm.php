<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Hidden;
use Illuminate\Support\Facades\Hash;
use Filament\Forms;
use Filament\Facades\Filament;

use Spatie\Permission\Models\Role;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Hidden::make('company_id')
               ->default(fn () => Filament::getTenant()?->id)
               ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),
                
                    Select::make('roles')
                    ->label('Role')
                    ->multiple()
                    ->options(
                        Role::query()->pluck('name', 'name')
                    )
                    ->preload()
                    ->saveRelationshipsUsing(function ($record, $state) {
                        $record->syncRoles($state);
                    }),
                TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => filled($state) ? Hash::make($state) : null)
                    ->required(fn (string $context) => $context === 'create')
                    ->dehydrated(fn ($state) => filled($state))
                    ->label('Password'),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true)
                    ->dehydrated(fn ($state) => true),
                    
            ]);
    }
}
