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
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            $table->string('nrOrden', 20)->unique();
            $table->string('direccion', 120);
            $table->Integer('tarea_id'); // Definición de la columna
            $table->Integer('cliente_id');
            $table->date('fecha');
            $table->Integer('estado_id');
            $table->Integer('vehiculo_id')->nullable(); // Referencia al vehículo asignado
            $table->timestamps();

            // Definición de claves foráneas
            $table->foreign('tarea_id')->references('id')->on('tareas')->onDelete('cascade'); // Clave foránea aquí
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
};
