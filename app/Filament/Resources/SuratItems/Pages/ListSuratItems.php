<?php

namespace App\Filament\Resources\SuratItems\Pages;

use App\Filament\Resources\SuratItems\SuratItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuratItems extends ListRecords
{
    protected static string $resource = SuratItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
