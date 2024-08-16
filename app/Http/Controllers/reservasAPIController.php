<?php

namespace App\Http\Controllers;
use App\Models\Reservas;
use Illuminate\Http\Request;

class reservasAPIController extends Controller
{
    public function index()
    {
        $reserva = Reservas    ::all();
        return response()->json($reserva);
    }

    public function show($id)
    {
        $reserva = Reservas::find($id);

        if (!$reserva) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($login);
    }
}
