<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cabinLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabin_levels')->insert([
            'name' => "VIP",
            'color' => "ff0000",
            'description' => "Cabañas para gente con mucho dinero (trafico de activos)"
        ]);

        DB::table('cabin_levels')->insert([
            'name' => "Basic",
            'color' => "ff0000",
            'description' => "Cabañas para gente con poco dinero"
        ]);
        
    }
}
