<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Individuales;

class IndividualesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Individuales::create([
            'imagen' => 'habitaciones/01J3KDK5FQP81BHXNKT1GMRC06.jpeg',
            'tipohabitacion' => 'Habitación Individual 1',
            'tarifa' => '80',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 1,1 cama tamaño individual'
        ]);

        Individuales::create([
            'imagen' => 'habitaciones/01J3KDM4XP2WCFV1PCBQVESP1H.jpg',
            'tipohabitacion' => 'Habitación Individual 2',
            'tarifa' => '80',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 1,1 cama tamaño individual'
        ]);
        Individuales::create([
            'imagen' => 'habitaciones/01J3KDMY009DCQGQQG3HV1FW8J.jpg',
            'tipohabitacion' => 'Habitación Individual 3',
            'tarifa' => '80',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 1,1 cama tamaño individual'
        ]);

        Individuales::create([
            'imagen' => 'habitaciones/01J3KDP6FAWAD6J1P8GC62AR06.jpg',
            'tipohabitacion' => 'Habitación Individual 4',
            'tarifa' => '80',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 1,1 cama tamaño individual'
        ]);
        Individuales::create([
            'imagen' => 'habitaciones/01J3KDQD912D4YQGWZS6DV1M0C.jpg',
            'tipohabitacion' => 'Habitación Individual 5',
            'tarifa' => '80',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 1,1 cama tamaño individual'
        ]);
    }
}
