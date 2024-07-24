<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Suites;

class SuitesSeeder extends Seeder
{
    public function run()
    {
        Suites::create([
            'imagen' => 'habitacionesimg/habitacion1.jpeg',
            'tipohabitacion' => 'Habitación Suite 1',
            'tarifa' => '56',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después, Wi-Fi gratis, Desayuno continental gratis, Duerme 2, 2 camas tamaño queen',
        ]);

        Suites::create([
            'imagen' => 'habitacionesimg/habitacion2.jpeg',
            'tipohabitacion' => 'Habitación Suite 2',
            'tarifa' => '100',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después, Wi-Fi gratis, Desayuno continental gratis, Duerme 2, 2 camas tamaño queen',
        ]);

        Suites::create([
            'imagen' => 'habitacionesimg/habitacion3.jpeg',
            'tipohabitacion' => 'Habitación Suite 3',
            'tarifa' => '90',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después, Wi-Fi gratis, Desayuno continental gratis, Duerme 2, 2 camas tamaño queen',
        ]);
    }
}

