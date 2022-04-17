<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngredientController;
use App\Http\Middleware\userStatus;
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

// HOME PAGE
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/second',[HomeController::class, 'secondPage'])->name('secondPage');
Route::get('/third',[HomeController::class, 'thirdPage'])->name('thirdPage');
Route::get('/fourth',[HomeController::class, 'fourthPage'])->name('fourthPage');

// AUTHENTICATION PAGE
Route::get('/register-page',[HomeController::class,'getRegisterPage'])->name('getRegisterPage');
Route::get('/login-page',[HomeController::class,'getLoginPage'])->name('getLoginPage');

// ADMIN PAGE
Route::group(['middleware' => userStatus::class], function () {
    // CREATE INGREDIENT
    Route::get('/admin/ingredient/create-ingredient',[HomeController::class, 'getCreatePage'])->name('getCreatePage');
    Route::post('/admin/ingredient/create-ingredient',[IngredientController::class, 'createIngredient'])->name('createIngredient');

    // EDIT INGREDIENT
    Route::get('/admin/ingredient/edit-ingredient/{id}',[IngredientController::class, 'getUpdatePage'])->name('getUpdatePage');
    Route::patch('/admin/ingredient/edit-ingredient/{id}',[IngredientController::class, 'updateIngredient'])->name('updateIngredient');

    // INGREDIENT PAGE
    Route::get('/admin/ingredient', [HomeController::class, 'getIngredientPage'])->name('getIngredientPage');

    // GUDANG PAGE
    Route::get('/admin/gudang', [HomeController::class, 'getGudangPage'])->name('getGudangPage');
});

Auth::routes();
