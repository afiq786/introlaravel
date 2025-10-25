<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Query to add d
        DB::table('tb_produk') -> insert ([
            [
            'nama_produk' => 'HP Pavilion Plus Laptop 16',
            'harga' => 5299,
            'deskripsi_produk' => 'Blazing fast personal computer 2025',
            'kategori_id' => '1',
            'created_at' => now()
        ],
        [
            'nama_produk' => 'Apple MacBook Pro 14 inch M5',
            'harga' => 6999,
            'deskripsi_produk' => 'Blazing fast personal computer 2025',
            'kategori_id' => '2',
            'created_at' => now()
        ],
        [
            'nama_produk' => 'Lenovo ThinkPad P14s Gen 6 Intel',
            'harga' => 11922,
            'deskripsi_produk' => 'Blazing fast personal computer 2025',
            'kategori_id' => '7',
            'created_at' => now()
        ],
        [
            'nama_produk' => 'Dell Alienware 16 Aurora Gaming',
            'harga' => 4219,
            'deskripsi_produk' => 'Blazing fast personal computer 2025',
            'kategori_id' => '4',
            'created_at' => now()
        ]
        ]
    );
    }
}
