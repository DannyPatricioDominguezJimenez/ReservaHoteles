<?php

namespace App\Filament\Resources\DoblesResource\Pages;

use App\Filament\Resources\DoblesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDobles extends ListRecords
{
    protected static string $resource = DoblesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
