<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    
    protected $table = 'tb_pelanggan';

    protected $fillable = [
        'namapelanggan',
        'nohp',
        'alamat',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
