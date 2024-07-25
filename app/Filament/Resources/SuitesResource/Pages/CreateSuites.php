<?php

namespace App\Filament\Resources\SuitesResource\Pages;

use App\Filament\Resources\SuitesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSuites extends CreateRecord
{
    protected static string $resource = SuitesResource::class;
    protected function getCreatedNotificationTitle(): string|null
    {
        return 'Habitacion Creada';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
