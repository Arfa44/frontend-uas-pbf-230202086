<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
    ];
    protected $primaryKey = 'id';
}
