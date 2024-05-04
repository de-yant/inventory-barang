<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $table = 'barang_masuks';
    protected $fillable = [
        'kode_barang_masuk',
        // 'kategori',
        // 'stok_awal',
        // 'stok_masuk',
        // 'total_stok',
    ];
    // public function stok()
    // {
    //     return $this->belongsTo(Stok::class, 'kode_barang', 'kode_barang');
    // }

    // public function barang_masuk_line()
    // {
    //     return $this->hasMany(BarangMasuk_line::class, 'barang_masuk_id', 'id');
    // }

    public function stok()
    {
        return $this->belongsTo(Stok::class,'kode_barang','id');
    }
}
