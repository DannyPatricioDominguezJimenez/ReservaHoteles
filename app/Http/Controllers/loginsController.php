<?php

namespace App\Http\Controllers;
use App\Models\Logins;
use Illuminate\Http\Request;

class loginsController extends Controller
{
    public function index()
    {
        $logins = Logins    ::all();
        return response()->json($logins);
    }

    public function show($id)
    {
        $login = Logins::find($id);

        if (!$login) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($login);
    }
}