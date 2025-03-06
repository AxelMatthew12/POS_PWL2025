<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::prefix('products')->group(function(){
    Route::get('/category/food-beverage',[CategoryController::class,'foodBeverage']);
    Route::get('/category/beauty-health',[CategoryController::class,'beautyHealth']);
    Route::get('/category/home-care',[CategoryController::class,'homeCare']);
    Route::get('/category/baby-kid',[CategoryController::class,'babykid']);
});
Route::prefix('users')->group(function(){
    Route::get('/user/{id}/name/{name}',[UserController::class,'user']);
    Route::get('/transactionid/{id}/namaproduct/{product}',[UserController::class,'transaction']);
});


