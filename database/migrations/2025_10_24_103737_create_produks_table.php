<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Below code are used to create colums for you 'tb_produk' table
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id('id_produk'); // Default primary key that Laravel assigned
            $table->string('nama_produk',150); //Default's Laravel is 255 length
            $table->integer('harga');
            $table->text('deskripsi_produk');
            $table->integer('kategori_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
