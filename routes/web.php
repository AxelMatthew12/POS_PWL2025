<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
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
// Route::prefix('users')->group(function(){
//     Route::get('/user/{id}/name/{name}',[UserController::class,'user']);
//     Route::get('/transactionid/{id}/namaproduct/{product}',[UserController::class,'transaction']);
// });

Route::get('/level', [LevelController::class,'index']);
Route::get('/kategori',[KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

// Praktikum 2.6
Route::get('/user/tambah',[UserController::class, 'tambah']);
Route::post('/user/tambah_simpan',[UserController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
