<?php

namespace App\Filament\Resources\ServiciosResource\Pages;

use App\Filament\Resources\ServiciosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicios extends EditRecord
{
    protected static string $resource = ServiciosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getSavedNotificationTitle(): string|null
    {
        return 'Servicio Actualizado';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
