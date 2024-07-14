<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Huesped extends Model
{
    protected $table = 'huespedes'; // Nombre de la tabla en la base de datos
    protected $fillable = ['nombre', 'apellido', 'cedula', 'fechanacimiento', 'email', 'password']; // Campos que se pueden llenar

    // Aquí podrías definir relaciones con otros modelos si es necesario
}