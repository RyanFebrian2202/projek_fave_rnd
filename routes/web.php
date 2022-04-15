<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngredientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('authentication.register');
});

Route::get('/register-page',[HomeController::class,'getRegisterPage'])->name('getRegisterPage');

Route::get('/login-page',[HomeController::class,'getLoginPage'])->name('getLoginPage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CREATE INGREDIENT
Route::get('/create-ingredient',[HomeController::class, 'getCreatePage'])->name('getCreatePage');
Route::post('/create-ingredient',[IngredientController::class, 'createIngredient'])->name('createIngredient');

//EDIT INGREDIENT
Route::get('/edit-ingredient/{id}',[IngredientController::class, 'getUpdatePage'])->name('getUpdatePage');
Route::patch('/edit-ingredient/{id}',[IngredientController::class, 'updateIngredient'])->name('updateIngredient');

