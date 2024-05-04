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
        Schema::create('barang_masuks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_barang_masuk');
            // $table->string('kategori');
            // $table->string('kode_barang');
            // $table->string('stok');
            // $table->string('stok_awal');
            // $table->string('stok_masuk');
            // $table->string('total_stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuks');
    }
};
