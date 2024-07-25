<?php

namespace Database\Seeders;
use App\Models\Cuadruples;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuadrupleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cuadruples::create([
            'imagen' => 'habitaciones/01J3KP2M3V91RSXCWM1VN4B70H.jpg',
            'tipohabitacion' => 'Habitación Cuádruple 1',
            'tarifa' => '120',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 4,2 cama tamaño queen'
        ]);
        Cuadruples::create([
            'imagen' => 'habitaciones/01J3KP354NNPDVTZY1C7A22YYE.jpg',
            'tipohabitacion' => 'Habitación Cuádruple 2',
            'tarifa' => '130',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 4,2 cama tamaño queen'
        ]);
        Cuadruples::create([
            'imagen' => 'habitaciones/01J3KP3PHYN8KFFZR0031R9DZD.jpg',
            'tipohabitacion' => 'Habitación Cuádruple 3',
            'tarifa' => '140',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 4,2 cama tamaño queen'
        ]);
        Cuadruples::create([
            'imagen' => 'habitaciones/01J3KP45VCX21P29YXY5FXJ92B.jpg',
            'tipohabitacion' => 'Habitación Cuádruple 4',
            'tarifa' => '140',
            'Estado' => 'Disponible',
            'Descripcion' => 'Reserva ahora, paga después,Wi-Fi gratis,Desayuno continental gratis,Duerme 4,2 cama tamaño queen'
        ]);
    }
}
