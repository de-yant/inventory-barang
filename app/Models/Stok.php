<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $table = 'stoks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategory',
        'satuan',
        'jumlah',
        'keterangan',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
