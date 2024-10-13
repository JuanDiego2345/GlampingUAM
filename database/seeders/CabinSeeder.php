<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabins')->insert([
            'name' => 'Cabin1',
            'cabinLevel_id' => 1,
            'capacity' => 4,
        ]);

        DB::table('cabins')->insert([
            'name' => 'Cabin2',
            'cabinLevel_id' => 2,
            'capacity' => 6,
        ]);
    }
}
