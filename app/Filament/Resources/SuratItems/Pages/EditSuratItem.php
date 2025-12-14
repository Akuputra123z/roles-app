<?php

namespace App\Filament\Resources\SuratItems\Pages;

use App\Filament\Resources\SuratItems\SuratItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSuratItem extends EditRecord
{
    protected static string $resource = SuratItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
