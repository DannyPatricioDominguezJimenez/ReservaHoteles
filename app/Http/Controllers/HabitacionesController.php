<?php
namespace App\Http\Controllers;

use App\Models\Suites;
use App\Models\Individuales;
use App\Models\Dobles;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function index()
    {
        $suites = Suites::all();
        $individuales = Individuales::all();
        $dobles = Dobles::all();
        return view('reservas', compact('suites', 'individuales','dobles'));
    }
}
