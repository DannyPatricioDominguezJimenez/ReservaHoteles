<?php

namespace App\Filament\Resources\ReporteHuespedesResource\Pages;

use App\Filament\Resources\ReporteHuespedesResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListReporteHuespedes extends ListRecords
{
    protected static string $resource = ReporteHuespedesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Generar reporte')
            ->url(fn() => route('download.huespedes.pdf'))
            ->openUrlInNewTab()
            ->openUrlInNewTab()
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary'),
        ];
    }
}
