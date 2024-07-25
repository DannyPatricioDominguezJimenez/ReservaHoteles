<?php

namespace App\Filament\Resources\DoblesResource\Pages;

use App\Filament\Resources\DoblesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDobles extends CreateRecord
{
    protected static string $resource = DoblesResource::class;
    protected function getCreatedNotificationTitle(): string|null
    {
        return 'Habitacion Creada';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
