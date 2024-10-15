<?php

namespace Database\Seeders;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => 'Casta',
        ]);

        DB::table('services')->insert([
            'name' => 'Cami',
        ]);

        DB::table('services')->insert([
            'name' => 'Juandi',
        ]);
    }
}
