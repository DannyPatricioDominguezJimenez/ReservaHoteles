<?php

namespace App\Filament\Resources\ServiciosResource\Pages;

use App\Filament\Resources\ServiciosResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServicios extends CreateRecord
{
    protected static string $resource = ServiciosResource::class;
    protected function getCreatedNotificationTitle(): string|null
    {
        return 'Serivicio Creada';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
