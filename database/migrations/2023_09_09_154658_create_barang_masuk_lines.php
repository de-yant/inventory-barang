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
        Schema::create('barang_masuk_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_barang_masuk')->unsigned();
            $table->foreign('kode_barang_masuk')->references('id')->on('barang_masuks')->onDelete('cascade');
            $table->integer('kode_barang')->unsigned();
            $table->foreign('kode_barang')->references('id')->on('stoks')->onDelete('restrict');
            $table->string('stok_awal');
            $table->string('stok_masuk');
            $table->string('total_stok');

            // $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuk_lines');
    }
};
