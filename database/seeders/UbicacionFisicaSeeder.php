<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;   
use Illuminate\Database\Seeder;
use App\Models\UbicacionFisica;

class UbicacionFisicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UbicacionFisica::factory(10)->count(10)->create();
    }
}
