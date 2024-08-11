<?php

namespace App\Filament\Resources\ReporteMesesResource\Pages;

use App\Filament\Resources\ReporteMesesResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListReporteMeses extends ListRecords
{
    protected static string $resource = ReporteMesesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Generar reporte')
                ->url(fn() => route('download.meses', [
                    'filters' => json_encode($this->getTableFilters()), // Enviar filtros a la URL
                ]))
                ->openUrlInNewTab()
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary'),
        ];
    }
}
