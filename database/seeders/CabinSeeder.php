<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CabinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    // {
    //     DB::table('cabins')->insert([
    //         'name' => 'Cabin1',
    //         'cabinLevel_id' => 33,
    //         'capacity' => 4,
    //     ]);

    //     DB::table('cabins')->insert([
    //         'name' => 'Cabin2',
    //         'cabinLevel_id' => 34,
    //         'capacity' => 6,
    //     ]);
    // }
    {
        DB::table('cabins')->insert([
            'name' => 'Cabin10',
            'cabinLevel_id' => 1,
            'capacity' => 4,
        ]);

        DB::table('cabins')->insert([
            'name' => 'Cabin20',
            'cabinLevel_id' => 2,
            'capacity' => 6,
        ]);
    }
    DB::table('cabins')->insert([
        'name' => 'Cabin3',
        'cabinLevel_id' => 35,
        'capacity' => 8,
    ]);

    DB::table('cabins')->insert([
        'name' => 'Cabin4',
        'cabinLevel_id' => 36,
            'capacity' => 10,
        ]);

    }   
}
       