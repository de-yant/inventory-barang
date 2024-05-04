<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $table = 'barang_keluars';
    protected $fillable = [
        'kode_barang_keluar',
        // 'kategori',
        // 'stok_awal',
        // 'stok_masuk',
        // 'total_stok',
    ];
    public function stok()
    {
        return $this->belongsTo(Stok::class, 'kode_barang', 'kode_barang');
    }

    public function barang_keluar_line()
    {
        return $this->hasMany(BarangKeluar_line::class, 'barang_keluar_id', 'id');
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'divisi_id', 'id');
    }
}
