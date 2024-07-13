<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\homeController;

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
Route::get('/', function(){
    return view('landingPage');
});

Route::get('keranjang', [produkController::class, 'keranjang']);

Route::get('/daftar', [userController::class, 'daftarPage']);
Route::get('menu', [produkController::class, 'listMenu']);
Route::get('createMenu', [produkController::class, 'createMenu']);
Route::get('menu/edit/{produks}', [produkController::class, 'editMenu']);
Route::get('login', [userController::class, 'login']);
Route::get('home', [produkController::class, 'home']);

Route::post('tambahMenu', [produkController::class, 'add']);
Route::post('daftar', [userController::class, 'daftar']);
Route::post('loginAction', [userController::class, 'masuk']);
Route::post('menu/{produks}', [produkController::class, 'delete']);
Route::put('editMenu/{produks}', [produkController::class, 'update']);