<?php

namespace App\Filament\Resources\ReporteMesesResource\Pages;

use App\Filament\Resources\ReporteMesesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReporteMeses extends EditRecord
{
    protected static string $resource = ReporteMesesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
