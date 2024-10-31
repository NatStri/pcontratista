<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(EstadosSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(EmpleadosSeeder::class);
        $this->call(EquiposSeeder::class);
        $this->call(VehiculosSeeder::class);
        $this->call(TareasSeeder::class);
        $this->call(MaterialesSeeder::class);
        $this->call(OrdenesSeeder::class);
        $this->call(EquiposTrabajoSeeder::class);
        $this->call(OrdenesmaterialesSeeder::class);
        $this->call(EquipoordenesSeeder::class);
    }
}
