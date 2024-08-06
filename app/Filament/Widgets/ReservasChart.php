<?php

namespace App\Filament\Widgets;

use App\Models\Reservas;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class ReservasChart extends ChartWidget
{
    protected static ?string $heading = 'Reservas Anuales';

    protected function getData(): array
    {
        // Obtener el rango de años para los últimos 5 años
        $endYear = Carbon::now()->year;
        $startYear = $endYear - 4; // Cambia el número de años según sea necesario

        // Obtener las reservas agrupadas por año basadas en la fecha de ingreso
        $reservas = Reservas::whereBetween('ingreso', [$startYear . '-01-01', $endYear . '-12-31'])
            ->selectRaw('YEAR(ingreso) as year, COUNT(*) as count')
            ->groupBy('year')
            ->orderBy('year')
            ->get();

        // Formatear los datos para el gráfico
        $labels = [];
        $data = [];

        // Iterar a través de los años en el rango
        for ($year = $startYear; $year <= $endYear; $year++) {
            $labels[] = $year;
            $yearReserva = $reservas->firstWhere('year', $year);
            $data[] = $yearReserva ? $yearReserva->count : 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Reservas',
                    'data' => $data,
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Tipo de gráfico: barra (puedes cambiarlo a 'line' si prefieres un gráfico de líneas)
    }
}
