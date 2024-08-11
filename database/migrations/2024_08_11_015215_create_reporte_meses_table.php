<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('reporte_meses', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('telefono');
            $table->date('ingreso');
            $table->date('salida');
            $table->string('tipohabitacion');
            $table->integer('nrohabitaciones');
            $table->decimal('tarifa', 8, 2);
            $table->string('metodopago');
            $table->string('ofertas')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reporte_meses');
    }
};
