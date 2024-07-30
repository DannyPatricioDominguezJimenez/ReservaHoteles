<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Log;

class InicioSesionController extends Controller
{
    public function showLoginForm()
    {
        return view('iniciosesion'); // Asegúrate de que tienes una vista 'iniciosesion.blade.php'
    }

    public function authenticate(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'usuario' => 'required|email', // Asumimos que 'usuario' es el correo electrónico
            'contraseña' => 'required',
        ]);

        // Registros de depuración
        Log::info('Datos recibidos: ', $request->all());

        // Verificar si el correo ya existe en la base de datos
        $existingUser = Login::where('usuario', $request->usuario)->first();

        if (!$existingUser) {
            // Guardar los datos en la base de datos solo si no existe
            $login = new Login;
            $login->usuario = $request->usuario;
            $login->contraseña = bcrypt($request->contraseña); // Encriptar la contraseña
            $login->save();

            // Confirmación de guardado
            Log::info('Datos guardados en la base de datos.');
        } else {
            // Confirmación de que el usuario ya existe
            Log::info('El usuario ya existe en la base de datos.');
        }

        // Redirigir basado en el correo electrónico
        if ($request->usuario === 'joel@admin.com') {
            return redirect()->route('filament.dashboard.pages.dashboard'); // Redirigir a la ruta 'dashboard'
        } else {
            return redirect()->route('inicio')->with('success', 'Inicio de sesión exitoso.');
        }
    }
}
