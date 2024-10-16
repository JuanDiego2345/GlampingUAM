<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
=======

>>>>>>> c8a776401f09a7ce4eea18798178cb4daa47f8b1

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
<<<<<<< HEAD
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
=======
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
>>>>>>> c8a776401f09a7ce4eea18798178cb4daa47f8b1
}
       