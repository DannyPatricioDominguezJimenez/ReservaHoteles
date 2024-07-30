<?php

namespace App\Filament\Resources\CuadruplesResource\Pages;

use App\Filament\Resources\CuadruplesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCuadruples extends EditRecord
{
    protected static string $resource = CuadruplesResource::class;

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
