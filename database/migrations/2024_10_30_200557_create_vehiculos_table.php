<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10)->unique(); // Código único para identificar el vehículo
            $table->string('placa',10)->unique(); // Placa del vehículo
            $table->string('modelo',120); // Modelo del vehículo
            $table->string('tipo',120); // Tipo de vehículo (por ejemplo, camioneta, camión, etc.)
            $table->boolean('disponible')->default(true); // Indica si el vehículo está disponible
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
};
