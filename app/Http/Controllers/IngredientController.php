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
            'name' => $request -> name,
            'stock' => $request -> stock,
            'merk' => $request -> merk,
            'gudang_id' => $request -> gudang_id,
            'buy_date' => $request -> buy_date,
            'expired_date' => $request -> expired_date,
        ]);

        return redirect(route('getIngredientPage'));
    }

    public function getUpdatePage($id){
        $ingredient = Ingredient::findOrFail($id);

        return view('',['ingredient'=> $ingredient]);
    }

    public function updateIngredient(IngredientRequest $request, $id){
        $ingredient = Ingredient::findOrFail($id);

        $ingredient->update([
            'name' => $request -> name,
            'stock' => $request -> stock,
            'merk' => $request -> merk,
            'gudang_id' => $request -> gudang_id,
            'buy_date' => $request -> buy_date,
            'expired_date' => $request -> expired_date,
        ]);

        return redirect(route('getIngredientPage'));
    }

    public function deleteIngredient($id){
        Ingredient::destroy($id);
        return redirect(route('getIngredientPage'));
    }
}
