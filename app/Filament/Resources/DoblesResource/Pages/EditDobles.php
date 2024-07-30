<?php

namespace App\Filament\Resources\DoblesResource\Pages;

use App\Filament\Resources\DoblesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDobles extends EditRecord
{
    protected static string $resource = DoblesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getSavedNotificationTitle(): string|null
    {
        return 'Habitacion Actualizada';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
