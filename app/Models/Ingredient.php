<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang', 'stock', 'merk', 'lokasi_barang', 'buy_date', 'expired_date'
    ];
}
