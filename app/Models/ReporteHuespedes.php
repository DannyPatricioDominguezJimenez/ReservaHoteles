<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporteHuespedes extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'cedula', 'fechanacimiento', 'email', 'password'];

}
