<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuadruples extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagen',
        'tipohabitacion',
        'tarifa',
        'Estado',
        'Descripcion',
    ];
}
