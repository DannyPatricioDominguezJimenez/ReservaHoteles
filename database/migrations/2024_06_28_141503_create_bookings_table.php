<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->date('ingreso');
            $table->date('salida');
            $table->string('tipohabitacion');
            $table->unsignedTinyInteger('nrohabitaciones');
            $table->decimal('tarifa', 8, 2)->nullable();
            $table->string('metodopago');
            $table->string('ofertas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};

