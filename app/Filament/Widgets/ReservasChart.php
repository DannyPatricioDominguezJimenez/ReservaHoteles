<?php

namespace App\Filament\Widgets;

use App\Models\Reservas;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class ReservasChart extends ChartWidget
{
    protected static ?string $heading = 'Reservas Diarias';

    protected function getData(): array
    {
        // Obtener el rango de fechas para los últimos 30 días
        $end = Carbon::now();
        $start = $end->copy()->subDays(29); // 30 días en total

        // Obtener las reservas agrupadas por día basadas en la fecha de ingreso
        $reservas = Reservas::whereBetween('ingreso', [$start, $end])
            ->selectRaw('DATE(ingreso) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Formatear los datos para el gráfico
        $labels = [];
        $data = [];

        $period = Carbon::now()->subDays(29)->startOfDay()->daysUntil(Carbon::now()->startOfDay());

        foreach ($period as $date) {
            $labels[] = $date->format('d M');
            $dayReserva = $reservas->firstWhere('date', $date->format('Y-m-d'));
            $data[] = $dayReserva ? $dayReserva->count : 0;
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
        return 'line'; // Tipo de gráfico: línea
    }
}
