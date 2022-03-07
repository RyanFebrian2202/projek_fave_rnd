<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_gudang'
    ];

    public function Ingredient(){
        return $this->hasMany(Ingredient::class);
    }
}
