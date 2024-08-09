<?php

namespace App\Filament\Resources\ReporteAñosResource\Pages;

use App\Filament\Resources\ReporteAñosResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions\Action;

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
            Action::make('Generar reporte')
                ->url(fn() => route('download.tes', [
                    'filters' => json_encode($this->getTableFilters()), // Enviar filtros a la URL
                ]))
                ->openUrlInNewTab()
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary'),
        ];
    }
}
