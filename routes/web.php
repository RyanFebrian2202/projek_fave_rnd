<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
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

Auth::routes();

// HOME PAGE
Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/second',[Controller::class, 'secondPage'])->name('secondPage');
Route::get('/third',[Controller::class, 'thirdPage'])->name('thirdPage');
Route::get('/fourth',[Controller::class, 'fourthPage'])->name('fourthPage');

// AUTHENTICATION PAGE
Route::get('/registration',[Controller::class,'getRegisterPage'])->name('getRegisterPage');
Route::get('/signin',[Controller::class,'getLoginPage'])->name('getLoginPage');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

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
