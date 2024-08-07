<?php

namespace App\Filament\Resources\BookingsResource\Pages;

use App\Filament\Resources\BookingsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBookings extends CreateRecord
{
    protected static string $resource = BookingsResource::class;

    protected function getCreatedNotificationTitle(): string|null
    {
        return 'Reserva Creada';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
