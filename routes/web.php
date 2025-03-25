<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WelcomeController;
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


// Route::prefix('products')->group(function(){
//     Route::get('/category/food-beverage',[CategoryController::class,'foodBeverage']);
//     Route::get('/category/beauty-health',[CategoryController::class,'beautyHealth']);
//     Route::get('/category/home-care',[CategoryController::class,'homeCare']);
//     Route::get('/category/baby-kid',[CategoryController::class,'babykid']);
// });
// Route::prefix('users')->group(function(){
//     Route::get('/user/{id}/name/{name}',[UserController::class,'user']);
//     Route::get('/transactionid/{id}/namaproduct/{product}',[UserController::class,'transaction']);
// });

//Route::get('/level', [LevelController::class,'index']);
//Route::get('/kategori',[KategoriController::class, 'index']);
//
//Route::get('/user', [UserController::class, 'index']);

// Praktikum 2.6
// Route::get('/user/tambah',[UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan',[UserController::class, 'tambah_simpan']);

// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);


Route::get('/', [WelcomeController::class, 'index']);


Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']); 
    Route::post('/list', [UserController::class, 'list']); 
    Route::get('/create', [UserController::class, 'create']); 
    Route::post('/', [UserController::class, 'store']); 
    Route::get('/{id}', [UserController::class, 'show']); 
    Route::get('/{id}/edit', [UserController::class, 'edit']); 
    Route::put('/{id}', [UserController::class, 'update']); 
    Route::delete('/{id}', [UserController::class, 'destroy']); 
});

// untuk tabel m_level
Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']); 
    Route::post('/list', [LevelController::class, 'list']); 
    Route::get('/create', [LevelController::class, 'create']); 
    Route::post('/', [LevelController::class, 'store']); 
    Route::get('/{id}', [LevelController::class, 'show']); 
    Route::get('/{id}/edit', [LevelController::class, 'edit']);
    Route::put('/{id}', [LevelController::class, 'update']); 
    Route::delete('/{id}', [LevelController::class, 'destroy']); 
});

// untuk tabel m_kategori
Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']); 
    Route::post('/list', [KategoriController::class, 'list']); 
    Route::get('/create', [KategoriController::class, 'create']); 
    Route::post('/', [KategoriController::class, 'store']); 
    Route::get('/{id}', [KategoriController::class, 'show']); 
    Route::get('/{id}/edit', [KategoriController::class, 'edit']); 
    Route::put('/{id}', [KategoriController::class, 'update']); 
    Route::delete('/{id}', [KategoriController::class, 'destroy']); 
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [SupplierController::class, 'index']); 
    Route::post('/list', [SupplierController::class, 'list']); 
    Route::get('/create', [SupplierController::class, 'create']); 
    Route::post('/', [SupplierController::class, 'store']); 
    Route::get('/{id}', [SupplierController::class, 'show']); 
    Route::get('/{id}/edit', [SupplierController::class, 'edit']); 
    Route::put('/{id}', [SupplierController::class, 'update']); 
    Route::delete('/{id}', [SupplierController::class, 'destroy']); 
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']); 
    Route::post('/list', [BarangController::class, 'list']); 
    Route::get('/create', [BarangController::class, 'create']); 
    Route::post('/', [BarangController::class, 'store']); 
    Route::get('/{id}', [BarangController::class, 'show']); 
    Route::get('/{id}/edit', [BarangController::class, 'edit']); 
    Route::put('/{id}', [BarangController::class, 'update']); 
    Route::delete('/{id}', [BarangController::class, 'destroy']); 
});






