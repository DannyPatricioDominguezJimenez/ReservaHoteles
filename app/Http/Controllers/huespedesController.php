<?php

namespace App\Http\Controllers;
use App\Models\Huespedes;
use Illuminate\Http\Request;

class huespedesController extends Controller
{
    public function index()
    {
        $huesped = Huespedes    ::all();
        return response()->json($huesped);
    }

    public function show($id)
    {
        $huesped = Huespedes::find($id);

        if (!$login) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($login);
    }
}
