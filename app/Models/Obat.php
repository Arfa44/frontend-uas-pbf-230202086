<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    
    protected $table = 'obat';
    protected $fillable = [
        'id',
        'nama_obat',
        'kategori',
         'stok',
        'harga',
    ];
    protected $primaryKey = 'id';
}


