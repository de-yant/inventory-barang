<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar_line extends Model
{
    use HasFactory;
    protected $table = 'barang_keluar_lines';
    public $timestamps = false;

    // public function barang_masuk()
    // {
    //     return $this->belongsTo(BarangMasuk::class, 'barang_masuk_id', 'id');
    // }

    public function stok()
    {
        return $this->belongsTo(Stok::class,'kode_barang','id');
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'divisi_id', 'id');
    }
}
