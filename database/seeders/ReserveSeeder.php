<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reserves')->insert([
            'user_id' => 1,
            'cabin_id' => 1,
            'checkIn' => '2024-10-15',
            'checkOut' => '2024-10-20',
            'status' => false,
        ]);

        DB::table('reserves')->insert([
            'user_id' => 1,
            'cabin_id' => 2,
            'checkIn' => '2024-10-25',
            'checkOut' => '2024-10-30',
            'status' => true,
        ]);
    }
}
