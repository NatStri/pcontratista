<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materiales;

class MaterialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materiales::create([
            'codigo' => 'MTR-001',
            'nombre' => 'Precintos',
            'descripcion' => 'Cintas de sujeción para cables',
            'cantidad_disponible' => 100,
            'cantidad_utilizada' => 20,
        ]);

        Materiales::create([
            'codigo' => 'MTR-002',
            'nombre' => 'Tarugos',
            'descripcion' => 'Tarugos para fijaciones en pared',
            'cantidad_disponible' => 200,
            'cantidad_utilizada' => 50,
        ]);

        Materiales::create([
            'codigo' => 'MTR-003',
            'nombre' => 'Trampas',
            'descripcion' => 'Trampas para cables',
            'cantidad_disponible' => 50,
            'cantidad_utilizada' => 10,
        ]);

        Materiales::create([
            'codigo' => 'MTR-005',
            'nombre' => 'Divisores',
            'descripcion' => 'Dispositivos para dividir señal',
            'cantidad_disponible' => 75,
            'cantidad_utilizada' => 15,
        ]);

        Materiales::create([
            'codigo' => 'MTR-006',
            'nombre' => 'Aerosellos',
            'descripcion' => 'Sellos para cables',
            'cantidad_disponible' => 150,
            'cantidad_utilizada' => 30,
        ]);
    }
}
