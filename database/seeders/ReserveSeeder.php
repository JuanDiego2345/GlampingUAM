<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
=======


>>>>>>> c8a776401f09a7ce4eea18798178cb4daa47f8b1
class ReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reserves')->insert([
            'user_id' => 9,
            'cabin_id' => 5,
            'checkIn' => '2024-10-15',
            'checkOut' => '2024-10-20',
            'status' => false,
        ]);

        DB::table('reserves')->insert([
            'user_id' => 10,
            'cabin_id' => 6,
            'checkIn' => '2024-10-25',
            'checkOut' => '2024-10-30',
            'status' => true,
        ]);
    }
}
