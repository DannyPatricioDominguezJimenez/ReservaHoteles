<?php

namespace App\Filament\Resources\ReporteAñosResource\Pages;

use App\Filament\Resources\ReporteAñosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReporteAños extends EditRecord
{
    protected static string $resource = ReporteAñosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
