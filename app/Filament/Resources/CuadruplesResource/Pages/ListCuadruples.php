<?php

namespace App\Filament\Resources\CuadruplesResource\Pages;

use App\Filament\Resources\CuadruplesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCuadruples extends ListRecords
{
    protected static string $resource = CuadruplesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
