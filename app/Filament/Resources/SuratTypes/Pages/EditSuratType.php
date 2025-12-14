<?php

namespace App\Filament\Resources\SuratTypes\Pages;

use App\Filament\Resources\SuratTypes\SuratTypeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSuratType extends EditRecord
{
    protected static string $resource = SuratTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
