<?php
namespace App\Http\Controllers;

use App\Models\Suites;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function index()
    {
        $suites = Suites::all();
        return view('reservas', compact('suites'));
    }
}
