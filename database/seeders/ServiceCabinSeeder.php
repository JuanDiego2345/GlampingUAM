<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceCabin;

class ServiceCabinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceCabin::create(['id_cabin' => 5, 'id_service' => 2, 'name' => 'Servicio de cabana 1']);
        ServiceCabin::create(['id_cabin' => 5, 'id_service' => 2, 'name' => 'Servicio de cabana 2']);
        ServiceCabin::create(['id_cabin' => 6, 'id_service' => 1, 'name' => 'Servicio de cabana 3']);
    }
}
