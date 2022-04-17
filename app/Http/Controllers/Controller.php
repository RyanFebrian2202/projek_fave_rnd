<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Ingredient;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $ingredients = Ingredient::all();
        $gudangs = Gudang::all();

        return view('home.home',[
            'ingredients' => $ingredients,
            'gudangs' => $gudangs
        ]);
    }

    public function secondPage(){
        $ingredients = Ingredient::all();
        $gudangs = Gudang::all();

        return view('home.table2',[
            'ingredients' => $ingredients,
            'gudangs' => $gudangs
        ]);
    }

    public function thirdPage(){
        $ingredients = Ingredient::all();
        $gudangs = Gudang::all();

        return view('home.table3',[
            'ingredients' => $ingredients,
            'gudangs' => $gudangs
        ]);
    }

    public function fourthPage(){
        $ingredients = Ingredient::all();
        $gudangs = Gudang::all();

        return view('home.table4',[
            'ingredients' => $ingredients,
            'gudangs' => $gudangs
        ]);
    }

    public function getRegisterPage(){
        return view('authentication.register');
    }

    public function getLoginPage(){
        return view('authentication.login');
    }

    public function getCreatePage(){
        return view('admin.create');
    }

    public function getGudangPage(){
        $ingredients = Ingredient::all();
        $gudangs = Gudang::all();

        return view('admin.gudang', [
            'ingredients' => $ingredients,
            'gudangs' => $gudangs
        ]);
    }

    public function getIngredientPage(){
        $ingredients = Ingredient::all();

        return view('admin.ingredient', [
            'ingredients' => $ingredients
        ]);
    }
}
