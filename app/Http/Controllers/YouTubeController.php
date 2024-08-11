<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YouTubeController extends Controller
{
    /**
     * Muestra los videos del canal de YouTube.
     *
     * @return \Illuminate\View\View
     */
    public function showVideos()
    {
        // Tu API Key de YouTube
        $apiKey = 'AIzaSyBKdWVz4-YwUu5pubnwO4D3uTlu3_mQ2N8';
        // ID del canal de YouTube
        $channelId = 'UC-zX7F9Mwdd3iXDYKJ2LUeA';
        $maxResults = 10; // Número de videos a mostrar

        // URL de la API de YouTube
        $url = "https://www.googleapis.com/youtube/v3/search?key={$apiKey}&channelId={$channelId}&part=snippet,id&order=date&maxResults={$maxResults}";

        // Obtener los videos del canal
        $response = Http::get($url);

        if ($response->successful()) {
            $videos = $response->json('items');
        } else {
            // Manejar el error si la solicitud no es exitosa
            $videos = [];
        }

        // Pasar los videos a la vista 'prueba'
        return view('prueba', ['videos' => $videos]);
    }
}
