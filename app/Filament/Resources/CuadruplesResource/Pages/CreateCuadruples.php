<?php

namespace App\Filament\Resources\CuadruplesResource\Pages;

use App\Filament\Resources\CuadruplesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCuadruples extends CreateRecord
{
    protected static string $resource = CuadruplesResource::class;
    protected function getCreatedNotificationTitle(): string|null
    {
        return 'Habitacion Creada';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
