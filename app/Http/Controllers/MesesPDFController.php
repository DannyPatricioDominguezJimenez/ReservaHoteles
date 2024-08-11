<?php

namespace App\Http\Controllers;

use App\Models\ReporteMeses;
use App\Models\Reservas; // Asegúrate de que este sea el modelo correcto para los datos.
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MesesPDFController extends Controller
{
    public function downloadpdf(Request $request)
    {
        $filters = json_decode($request->query('filters'), true);
        // Obtén los datos que se reflejan en la tabla de Filament.
        $query = ReporteMeses::query();
         // Filtra por el mes actual.
            if (is_array($filters)) {
                foreach ($filters as $filter) {
                    if (isset($filter['column']) && isset($filter['value']) && $filter['value'] !== '') {
                        $query->where($filter['column'], $filter['value']);
                    }
                }
            }

        $meses = $query->get();
        $data = [
            'date' => date('m/d/y'),
            'meses' => $meses
        ];

        $pdf = Pdf::loadView('mesesPDF', $data)
            ->setPaper('a4', 'landscape'); // Configura el papel en formato horizontal.

        return $pdf->download('reporte_meses.pdf');
    }
}
