<?php

namespace App\Filament\Resources\IndividualesResource\Pages;

use App\Filament\Resources\IndividualesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIndividuales extends CreateRecord
{
    protected static string $resource = IndividualesResource::class;
    protected function getCreatedNotificationTitle(): string|null
    {
        return 'Habitacion Creada';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
