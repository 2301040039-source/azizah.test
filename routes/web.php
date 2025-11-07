<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/home', [BlogController::class, 'home']);
Route::get('/post/{id}', [BlogController::class, 'show']);
Route::get('/about', [BlogController::class, 'about']);
// Route::get('/', function () {
//     return view('welcome');
// });

// //ini adalah untuk ruting ke halaman 2
// Route::get('/kedua', function () {
//     return view('halamandua');
// });

// Route::get('/fitur', function () {
//     return view('fitur',['nama' => 'Selamat datang Azizah']);
// });
// Route::get('/product/{id}', function ($id) {
//     $product = [
//     'id' => $id,
//     'barang' => 'tiket',
//     'harga' => 100000
// ];
//     return view('product',['product' => $product]);
// });
