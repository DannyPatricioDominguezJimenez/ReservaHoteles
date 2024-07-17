<?php

namespace App\Filament\Resources\ModifyResource\Pages;

use App\Filament\Resources\ModifyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModifies extends ListRecords
{
    protected static string $resource = ModifyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
