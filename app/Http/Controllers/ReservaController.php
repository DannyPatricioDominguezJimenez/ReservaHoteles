<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservas; // Asegúrate de que el nombre del modelo sea correcto

class ReservaController extends Controller
{
    public function showForm()
    {
        return view('reservasform'); // Asegúrate de que este es el nombre correcto de tu vista
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'ingreso' => 'required|date',
            'salida' => 'required|date',
            'tipohabitacion' => 'required|string',
            'nrohabitaciones' => 'required|integer',
            'tarifa' => 'required|numeric',
            'metodopago' => 'required|string',
            
        ]);

        // Crear una nueva reserva en la base de datos
        reservas::create($validatedData);

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('inicio')->with('success', 'Reserva realizada con éxito');    }
}
