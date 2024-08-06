<?php

namespace App\Filament\Resources\ReporteAñosResource\Pages;

use App\Filament\Resources\ReporteAñosResource;
use Filament\Resources\Pages\ListRecords;

class ListReporteAños extends ListRecords
{
    protected static string $resource = ReporteAñosResource::class;

    protected function getHeaderWidgets(): array
    {
        return [];
    }

    protected function getActions(): array
    {
        return [
            // Puedes agregar botones de acción aquí si es necesario
        ];
    }
}
