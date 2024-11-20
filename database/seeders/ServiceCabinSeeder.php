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
        ServiceCabin::create(['id_cabin' => 1, 'id_service' => 1, 'name' => 'Servicio de cabana 1']);
        ServiceCabin::create(['id_cabin' => 2, 'id_service' => 2, 'name' => 'Servicio de cabana 2']);
        ServiceCabin::create(['id_cabin' => 3, 'id_service' => 3, 'name' => 'Servicio de cabana 3']);
    }
}
