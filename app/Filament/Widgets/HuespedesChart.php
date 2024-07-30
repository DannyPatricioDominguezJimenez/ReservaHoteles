<?php

namespace App\Filament\Widgets;

use App\Models\Huespedes;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class HuespedesChart extends ChartWidget
{
    protected static ?string $heading = 'Número de Huéspedes por Día';

    protected function getData(): array
    {
        // Obtener el rango de fechas para los últimos 30 días
        $end = Carbon::now();
        $start = $end->copy()->subDays(29); // 30 días en total

        // Obtener los huéspedes agrupados por día
        $huespedes = Huespedes::whereBetween('created_at', [$start, $end])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Formatear los datos para el gráfico
        $labels = [];
        $data = [];

        // Rellenar datos para los últimos 30 días
        $period = Carbon::now()->subDays(29)->startOfDay()->daysUntil(Carbon::now()->startOfDay());

        foreach ($period as $date) {
            $labels[] = $date->format('d M'); // Etiqueta de fecha
            $dayHuesped = $huespedes->firstWhere('date', $date->format('Y-m-d'));
            $data[] = $dayHuesped ? $dayHuesped->count : 0; // Número de huéspedes por día
        }

        return [
            'datasets' => [
                [
                    'label' => 'Huéspedes Registrados',
                    'data' => $data,
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Tipo de gráfico: barras
    }
}
