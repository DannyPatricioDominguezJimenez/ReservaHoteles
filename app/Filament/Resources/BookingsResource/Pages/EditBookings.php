<?php

namespace App\Filament\Resources\BookingsResource\Pages;

use App\Filament\Resources\BookingsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Notification;

class EditBookings extends EditRecord
{
    protected static string $resource = BookingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getSavedNotificationTitle(): string|null
    {
        return 'Reserva Actualizada';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
