<?php

namespace App\Http\Controllers;

use App\Models\Huesped;
use App\Models\Huespedes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//use App\Http\Controllers\RegistroController;

class RegistroController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario (opcional pero recomendado)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|max:20',
            'fechanacimiento' => 'required|date',
            'email' => 'required|string|email|max:255|unique:guests',
            'password' => 'required|string|min:8',
        ]);

        // Crear un nuevo huésped en la base de datos
        $huesped = new Huespedes();
        $huesped->nombre = $request->nombre;
        $huesped->apellido = $request->apellido;
        $huesped->cedula = $request->cedula;
        $huesped->fechanacimiento = $request->fechanacimiento;
        $huesped->email = $request->email;
        $huesped->password = $request->password; // Hashear la contraseña antes de guardarla

        $huesped->save();

        // Guardar los datos del huésped en la sesión
        session(['email' => $request->email, 'password' => $request->password]);

        // Redireccionar o devolver una respuesta
        return redirect('InicioSesion');
    }
}