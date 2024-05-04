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
        Schema::create('barang_keluar_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_barang_keluar')->unsigned();
            $table->foreign('kode_barang_keluar')->references('id')->on('barang_keluars')->onDelete('cascade');
            $table->integer('kode_barang')->unsigned();
            $table->foreign('kode_barang')->references('id')->on('stoks')->onDelete('restrict');
            $table->string('stok_awal');
            $table->string('stok_keluar');
            $table->string('total_stok');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_keluar_lines');
    }
};
