<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Mostrar el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('inicio_sesion');
    }

    // Procesar el inicio de sesión
    public function login(Request $request)
    {
        // Validar los datos del formulario de inicio de sesión
        $credentials = $request->validate([
            'username' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, limpiar los datos prellenados de la sesión
            $request->session()->forget(['email', 'password']);

            // Redirigir al usuario a la página principal o a otra página
            return redirect('/Inicio');
        }

        // Si la autenticación falla, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
        return redirect()->back()->withErrors([
            'username' => 'Credenciales incorrectas.',
        ]);
    }

    // Cerrar sesión
    public function logout()
    {
        Auth::logout();

        // Redirigir al usuario a la página de inicio o a donde desees después de cerrar sesión
        return redirect('Inicio');
    }
}