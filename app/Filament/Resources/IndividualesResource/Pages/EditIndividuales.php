<?php

namespace App\Filament\Resources\IndividualesResource\Pages;

use App\Filament\Resources\IndividualesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndividuales extends EditRecord
{
    protected static string $resource = IndividualesResource::class;

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
