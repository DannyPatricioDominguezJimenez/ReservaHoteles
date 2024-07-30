<?php

namespace App\Filament\Resources\IndividualesResource\Pages;

use App\Filament\Resources\IndividualesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndividuales extends ListRecords
{
    protected static string $resource = IndividualesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
