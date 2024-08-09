<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporteAños extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos',
        'direccion',
        'telefono',
        'ingreso',
        'salida',
        'tipohabitacion',
        'nrohabitaciones',
        'tarifa',
        'metodopago',
        'ofertas',
    ];
}
