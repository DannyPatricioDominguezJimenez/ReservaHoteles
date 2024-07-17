<?php

namespace App\Filament\Resources\ModifyResource\Pages;

use App\Filament\Resources\ModifyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateModify extends CreateRecord
{
    protected static string $resource = ModifyResource::class;
    protected function getCreatedNotificationTitle(): string|null
    {
        return 'Habitacion Creada';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
