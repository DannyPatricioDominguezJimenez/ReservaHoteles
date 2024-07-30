<?php

// ReservaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservas;

class ReservaController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'ingreso' => 'required|date',
            'salida' => 'required|date',
            'tipohabitacion' => 'required|string',
            'nrohabitaciones' => 'required|integer|min:1',
            'tarifa' => 'required|numeric',
            'metodopago' => 'required|string',
        ]);

        reservas::create($validatedData);

        return redirect('/inicio')->with('success', 'Reserva realizada con éxito');
    }
}
