<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang', 'stock', 'merk', 'gudang_id', 'buy_date', 'expired_date'
    ];

    public function gudang(){
        return $this->belongsTo(Gudang::class,'gudang_id','id');
    }
}
