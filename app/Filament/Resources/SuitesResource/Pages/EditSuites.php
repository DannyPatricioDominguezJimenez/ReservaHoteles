<?php

namespace App\Filament\Resources\SuitesResource\Pages;

use App\Filament\Resources\SuitesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuites extends EditRecord
{
    protected static string $resource = SuitesResource::class;

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
