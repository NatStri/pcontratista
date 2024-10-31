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
        Schema::create('equipos_trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('empleado_codigo',120);
            $table->Integer('equipo_id');
            $table->foreign('empleado_codigo')->references('codigo')->on('empleados');
            $table->foreign('equipo_id')->references('id')->on('equipos');
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
        Schema::dropIfExists('equipos_trabajos');
    }
};
