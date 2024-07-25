<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individuales extends Model
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
