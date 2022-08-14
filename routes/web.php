<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
Route::get('/session', function () {
    dd(session()->all());
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', [ProductController::class, 'home'])->name('home');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');  
Route::get('/product-detail/{id}', [ProductController::class, 'productDetail'])->name('product.detail'); 
Route::get('/search', [ProductController::class, 'search'])->name('search');   
Route::post('/add-to-cart', [ProductController::class, 'addToCart'])->name('add-to-cart');
Route::get('/cart-list', [ProductController::class, 'cartList'])->name('cart.list');  
Route::get('/remove-product/{id}', [ProductController::class, 'removeProduct'])->name('remove.product');
Route::get('/order-now', [ProductController::class, 'orderNow'])->name('order.now');  
Route::post('/order-placed', [ProductController::class, 'orderPlaced'])->name('order.placed');