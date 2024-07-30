<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huespedes extends Model
{
    use HasFactory;

    protected $table = 'huespedes'; // Nombre de la tabla en la base de datos
    protected $fillable = ['nombre', 'apellido', 'cedula', 'fechanacimiento', 'email', 'password']; // Campos que se pueden llenar

}
