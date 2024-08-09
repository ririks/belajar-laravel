<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\KeranjangController;

/*
|----------------------------------------------------------------------  ----
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/produk', [WelcomeController::class, 'produk'])->name('produk');
Route::get('/cart', [WelcomeController::class, 'cart'])->name('cart');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/registrasi', [RegisController::class, 'index'])->name('regis');
Route::post('/registrasi', [RegisController::class, 'store'])->name('regis.store');


Route::get('/product', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');

Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.delete');

Route::post('/keranjang', [KeranjangController::class, 'store'])->name('keranjang.store');
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');