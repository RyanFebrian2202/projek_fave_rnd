<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngredientRequest;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use PDO;

class IngredientController extends Controller
{
    public function createIngredient(IngredientRequest $request){
        Ingredient::create([
            'nama_barang' => $request -> nama_barang,
            'stock' => $request -> stock,
            'merk' => $request -> merk,
            'lokasi_barang' => $request -> lokasi_barang,
            'buy_date' => $request -> buy_date,
            'expired_date' => $request -> expired_date,
        ]);

        return redirect(route(''));
    }

    public function readIngredient(){
        $ingredients = Ingredient::all();

        return view('', ['ingredients' => $ingredients]);
    }
}
