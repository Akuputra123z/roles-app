<?php

namespace App\Filament\Resources\SuratTypes\Pages;

use App\Filament\Resources\SuratTypes\SuratTypeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuratTypes extends ListRecords
{
    protected static string $resource = SuratTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
