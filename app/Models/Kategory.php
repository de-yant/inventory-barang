<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
    use HasFactory;
    protected $table = 'kategories';
    protected $primaryKey = 'id, kategory';
    protected $fillable = [
        'kategory',
        'kategory_ket',
    ];
    protected $hidden;
}
