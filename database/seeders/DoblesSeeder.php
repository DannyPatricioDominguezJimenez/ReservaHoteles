<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dobles;

class DoblesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dobles::create([
            'imagen' => 'habitaciones/01J3KMMB9HKV36MF6Q26YJ9K1E.jpeg',
            'tipohabitacion' => 'Habitación Doble 1',
            'tarifa' => '100',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 2,1 cama tamaño queen'
        ]);

        Dobles::create([
            'imagen' => 'habitaciones/01J3KMNR1CN4CHAEPM8RE7AFCC.jpeg',
            'tipohabitacion' => 'Habitación Doble 2',
            'tarifa' => '100',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 2,2 camas tamaño twin'
        ]);
        Dobles::create([
            'imagen' => 'habitaciones/01J3KMPXD39H3YSJV07SE95YCE.jpg',
            'tipohabitacion' => 'Habitación Doble 3',
            'tarifa' => '100',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 2,1 cama tamaño King'
        ]);

        Dobles::create([
            'imagen' => 'habitaciones/01J3KMRV8A422XBPTPPANTFMFS.jpg',
            'tipohabitacion' => 'Habitación Doble 4',
            'tarifa' => '100',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 2,1 cama tamaño King'
        ]);
        Dobles::create([
            'imagen' => 'habitaciones/01J3KMSVG56T9VGVMFC6JE4ZT5.jpg',
            'tipohabitacion' => 'Habitación Doble 5',
            'tarifa' => '100',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 1,1 cama tamaño King'
        ]);
    }
}
