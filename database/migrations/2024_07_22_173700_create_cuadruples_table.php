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
        Schema::create('cuadruples', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');
            $table->string('tipohabitacion');
            $table->string('tarifa');
            $table->string('Estado');
            $table->string('Descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuadruples');
    }
};
