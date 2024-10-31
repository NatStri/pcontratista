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
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10)->unique(); // Código único para identificar el material
            $table->string('nombre',120); // Nombre del material
            $table->text('descripcion')->nullable(); // Descripción opcional del material
            $table->integer('cantidad_disponible'); // Cantidad disponible en el inventario
            $table->integer('cantidad_utilizada')->default(0); // Cantidad utilizada en total
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
        Schema::dropIfExists('materiales');
    }
};
