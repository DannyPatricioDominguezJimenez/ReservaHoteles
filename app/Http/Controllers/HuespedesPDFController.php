<?php

namespace App\Http\Controllers;

use App\Models\ReporteHuespedes;
use Illuminate\Http\Request;
use PDF;

class HuespedesPDFController extends Controller
{
    public function downloadpdf(Request $request)
    {
        // Obtener los filtros de la solicitud
        $filters = json_decode($request->query('filters'), true);

        $query = ReporteHuespedes::query();

        // Aplicar los filtros a la consulta
        if (is_array($filters)) {
            foreach ($filters as $filter) {
                if (isset($filter['column']) && isset($filter['value']) && $filter['value'] !== '') {
                    $query->where($filter['column'], $filter['value']);
                }
            }
        }

        $huespedes = $query->get();

        $data = [
            'date' => date('m/d/y'),
            'huespedes' => $huespedes,
        ];

        $pdf = PDF::loadView('huespedesPDF', $data)
            ->setPaper('a4', 'landscape');

        return $pdf->download('reporte_huespedes.pdf');
    }
}
