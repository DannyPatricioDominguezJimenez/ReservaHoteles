<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicios;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servicios::create([
            'titulo' => 'Rooftop Bar',
            'imagen' => 'servicios/01J40BMN2EVRM6FB9ENZ2AJRSJ.jpg',
            'descripcion' => 'Disfruta de vistas espectaculares y cócteles únicos en nuestro vibrante rooftop bar, el lugar perfecto para relajarte con amigos y disfrutar del ambiente nocturno.',
        ]);

        Servicios::create([
            'titulo' => 'Restaurante',
            'imagen' => 'servicios/01J40BWFXA37BMG5G2X3GS3DE5.jpg',
            'descripcion' => 'Disfrute de una experiencia culinaria inolvidable en nuestro restaurante gourmet, con platos que destacan lo mejor de la cocina local e internacional.',
        ]);

        Servicios::create([
            'titulo' => 'Habitación de Lujo',
            'imagen' => 'servicios/01J40BX68V3V4G2Z37WS54NZK0.jpg',
            'descripcion' => 'Disfruta de una estancia de lujo en nuestras habitaciones, diseñadas para tu confort con vistas impresionantes y servicios exclusivos.',
        ]);

        Servicios::create([
            'titulo' => 'SPA',
            'imagen' => 'servicios/01J40BY0R4PF13VAGBS340QKJG.jpg',
            'descripcion' => 'Sumérgete en la relajación total en nuestro exclusivo spa, donde podrás disfrutar de una variedad de tratamientos rejuvenecedores y terapias de bienestar, todo en un ambiente sereno y lujoso.',
        ]);

        Servicios::create([
            'titulo' => 'Vistas Espectaculares',
            'imagen' => 'servicios/01J40BZ96WHG704GCKE9K70BZW.jpg',
            'descripcion' => 'Déjate maravillar por las vistas impresionantes que rodean nuestro hotel, desde majestuosos paisajes marinos hasta panorámicas de montañas. Un verdadero deleite para los sentidos que hará de tu estancia una experiencia inolvidable.',
        ]);

        Servicios::create([
            'titulo' => 'Espacios Cómodos en la Playa',
            'imagen' => 'servicios/01J40C029B1J6P6M8V79F6NZXN.jpg',
            'descripcion' => 'Relájate en nuestros exclusivos espacios frente al mar, equipados con cómodas tumbonas y sombrillas. Disfruta del sol, la brisa marina y el sonido de las olas mientras te sumerges en el confort y la tranquilidad de la playa.',
        ]);
    }
}
