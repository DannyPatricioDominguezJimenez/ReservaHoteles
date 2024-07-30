<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Suites;

class SuitesSeeder extends Seeder
{
    public function run()
    {
        Suites::create([
            'imagen' => 'habitaciones/01J3JTN5N382W4PKWD39KVPFQ9.jpeg',
            'tipohabitacion' => 'Habitación Suite 1',
            'tarifa' => '150',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después, Wi-Fi gratis, Desayuno continental gratis, Duerme 2, 2 camas tamaño queen',
        ]);

        Suites::create([
            'imagen' => 'habitaciones/01J3JTP33RV1SWG85WYVX40K3S.jpeg',
            'tipohabitacion' => 'Habitación Suite 2',
            'tarifa' => '150',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después, Wi-Fi gratis, Desayuno continental gratis, Duerme 2, 2 camas tamaño queen',
        ]);

        Suites::create([
            'imagen' => 'habitaciones/01J3JTQ0ZNV2N4MJRZ7JQPGC13.jpeg',
            'tipohabitacion' => 'Habitación Suite 3',
            'tarifa' => '150',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después, Wi-Fi gratis, Desayuno continental gratis, Duerme 2, 2 camas tamaño queen',
        ]);
    }
}

