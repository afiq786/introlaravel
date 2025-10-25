<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_kategori') -> insert ([
        [
             'nama_kategori' => 'MacBook',
             'deskripsi' => 'Apple products'
        ],
        [
             'nama_kategori' => 'ThinkPad',
             'deskripsi' => 'Lenovo products'
        ],
        [
             'nama_kategori' => 'Alienware',
             'deskripsi' => 'DELL products'
        ],
        [
             'nama_kategori' => 'Invictus',
             'deskripsi' => 'HP products'
        ],
        ]);
    }
}
