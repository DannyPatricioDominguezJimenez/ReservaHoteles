<?php

namespace App\Filament\Resources\GuestsResource\Pages;

use App\Filament\Resources\GuestsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGuests extends EditRecord
{
    protected static string $resource = GuestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getSavedNotificationTitle(): string|null
    {
        return 'Huesped Actualizado';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
