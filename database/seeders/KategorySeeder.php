<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategories')->insert([
            'kategory' => 'ATK',
            'kategory_ket' => 'Alat Tulis Kantor',
        ]);

        DB::table('kategories')->insert([
            'kategory' => 'RTK',
            'kategory_ket' => 'Rumah Tangga Kantor',
        ]);
    }
}
