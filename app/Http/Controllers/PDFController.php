<?php

namespace App\Http\Controllers;

use App\Models\Reservas;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function downloadpdf(Request $request)
    {
        // Obtener los filtros de la solicitud
        $filters = json_decode($request->query('filters'), true);

        $query = Reservas::query();

        // Aplicar los filtros a la consulta
        if (is_array($filters)) {
            foreach ($filters as $filter) {
                if (isset($filter['column']) && isset($filter['value']) && $filter['value'] !== '') {
                    $query->where($filter['column'], $filter['value']);
                }
            }
        }

        $reservas = $query->get();

        $data = [
            'date' => date('m/d/y'),
            'reservas' => $reservas,
        ];

        $pdf = PDF::loadView('reservasPDF', $data)
            ->setPaper('a4', 'landscape');

        return $pdf->download('reporte_anual.pdf');
    }
}
