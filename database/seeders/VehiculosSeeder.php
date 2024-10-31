<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculos;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehiculos::create([
            'codigo' => 'VHC-001',
            'placa' => 'ABC123',
            'modelo' => 'Toyota Hilux',
            'tipo' => 'Camioneta',
            'disponible' => true,
        ]);

        Vehiculos::create([
            'codigo' => 'VHC-002',
            'placa' => 'XYZ456',
            'modelo' => 'Ford F-150',
            'tipo' => 'Camioneta',
            'disponible' => false,
        ]);

        Vehiculos::create([
            'codigo' => 'VHC-003',
            'placa' => 'LMN789',
            'modelo' => 'Chevrolet Silverado',
            'tipo' => 'Camión',
            'disponible' => true,
        ]);

        Vehiculos::create([
            'codigo' => 'VHC-004',
            'placa' => 'RST012',
            'modelo' => 'Nissan Frontier',
            'tipo' => 'Camioneta',
            'disponible' => true,
        ]);

        Vehiculos::create([
            'codigo' => 'VHC-005',
            'placa' => 'UVW345',
            'modelo' => 'Ram 1500',
            'tipo' => 'Camión',
            'disponible' => false,
        ]);
    }
}
