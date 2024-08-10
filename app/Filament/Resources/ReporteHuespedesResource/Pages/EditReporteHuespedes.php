<?php

namespace App\Filament\Resources\ReporteHuespedesResource\Pages;

use App\Filament\Resources\ReporteHuespedesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReporteHuespedes extends EditRecord
{
    protected static string $resource = ReporteHuespedesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
