<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $city = 'Esmeraldas,EC'; // Esmeraldas, Ecuador
        $apiKey = env('OPENWEATHER_API_KEY');
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            $weatherDescription = $data['weather'][0]['description'];
            $temperature = $data['main']['temp'];

            return view('prueba', compact('city', 'weatherDescription', 'temperature'));
        } else {
            return view('prueba', ['error' => 'No se pudo obtener la información del clima.']);
        }
    }
}
