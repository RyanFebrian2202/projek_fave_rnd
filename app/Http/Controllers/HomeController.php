<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.home');
    }

    public function secondPage(){
        return view('home.table2');
    }

    public function thirdPage(){
        return view('home.table3');
    }

    public function fourthPage(){
        return view('home.table4');
    }

    public function getRegisterPage(){
        return view('authentication.register');
    }

    public function getLoginPage(){
        return view('authentication.login');
    }

    public function getCreatePage(){
        return view('');
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
