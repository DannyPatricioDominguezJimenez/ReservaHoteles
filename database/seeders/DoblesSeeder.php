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
            'imagen' => 'habitacionesimg/habitacion2.jpeg',
            'tipohabitacion' => 'Habitación Doble 1',
            'tarifa' => '56',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 2,1 cama tamaño queen'
        ]);

        Dobles::create([
            'imagen' => 'habitacionesimg/habitacion5.jpeg',
            'tipohabitacion' => 'Habitación Doble 2',
            'tarifa' => '65',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 2,2 camas tamaño twin'
        ]);
        Dobles::create([
            'imagen' => 'habitacionesimg/doble3.jpg',
            'tipohabitacion' => 'Habitación Doble 3',
            'tarifa' => '80',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 2,1 cama tamaño King'
        ]);

        Dobles::create([
            'imagen' => 'habitacionesimg/doble4.jpg',
            'tipohabitacion' => 'Habitación Doble 4',
            'tarifa' => '80',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 2,1 cama tamaño King'
        ]);
        Dobles::create([
            'imagen' => 'habitacionesimg/doble5.jpg',
            'tipohabitacion' => 'Habitación Doble 5',
            'tarifa' => '80',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 1,1 cama tamaño King'
        ]);
    }
}
