<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estados;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estados::create([
            "nombre" => "Creado",
        ]);
        
        Estados::create([
            "nombre" => "En proceso"
        ]);

        Estados::create([
            "nombre" => "Finalizado"
        ]);

        Estados::create([
            "nombre" => "No realizado"
        ]);
    }
}
