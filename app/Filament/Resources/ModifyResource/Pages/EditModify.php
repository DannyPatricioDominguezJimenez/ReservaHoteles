<?php

namespace App\Filament\Resources\ModifyResource\Pages;

use App\Filament\Resources\ModifyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModify extends EditRecord
{
    protected static string $resource = ModifyResource::class;

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
