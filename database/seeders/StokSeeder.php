<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stoks')->insert([
            'kode_barang' => 'ATK-0001',
            'nama_barang' => 'Stabilo',
            'kategory' => '1',
            'satuan' => 'pcs',
            'jumlah' => '100',
            'keterangan' => 'Stabilo warna biru',
        ]);
        DB::table('stoks')->insert([
            'kode_barang' => 'ATK-0002',
            'nama_barang' => 'Pensil',
            'kategory' => '1',
            'satuan' => 'pcs',
            'jumlah' => '100',
            'keterangan' => 'Pensil warna hitam',
        ]);
        DB::table('stoks')->insert([
            'kode_barang' => 'RTK-0001',
            'nama_barang' => 'Galon',
            'kategory' => '2',
            'satuan' => 'pcs',
            'jumlah' => '10',
            'keterangan' => 'Galon isi ulang',
        ]);
        DB::table('stoks')->insert([
            'kode_barang' => 'RTK-0002',
            'nama_barang' => 'Gelas',
            'kategory' => '2',
            'satuan' => 'pcs',
            'jumlah' => '20',
            'keterangan' => 'Gelas plastik',
        ]);
    }
}
