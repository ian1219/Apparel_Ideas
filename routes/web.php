<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TermsController;
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

Route::group(['middleware' => 'guest'], function () {
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('auth.login');
Route::get('/home', [ProductController::class, 'home'])->name('home');
Route::get('landing/{id}/sight', [ProductController::class, 'sight'])->name('sight');

});

Route::group(['middleware' => 'auth'], function () {

Route::delete('/logout', [AuthController::class, 'logout'])->name('logout'); 
Route::get('/', [ProductController::class,'index'])->name('products.index')->middleware('cartItemCount');
Route::get('/policies/terms&policy', [TermsController::class, 'policies'])->name('policies.terms&policy');
Route::get('/policies/terms', [TermsController::class, 'terms'])->name('policies.terms');

Route::get('/policies/privacy', [TermsController::class, 'privacy'])->name('policies.privacy');
Route::get('/policies/community', [TermsController::class, 'community'])->name('policies.community');

Route::get('/search', [ProductController::class, 'search'])->name('products.search')->middleware('cartItemCount');

Route::post('/products/{id}/add-to-cart', [ProductController::class, 'addToCart'])->name('products.addToCart');

Route::get('/cart', [ProductController::class, 'showCart'])->name('products.cart')->middleware('cartItemCount');

Route::get('products/{id}/item', [ProductController::class,'item'])->name('products.item')->middleware('cartItemCount');

Route::delete('/cart/{id}', [ProductController::class,'deleteFromCart'])->name('cart.delete');

Route::get('products/prod', [ProductController::class,'prod'])->name('products.prod');

Route::get('/seller/sell', [ProductController::class, 'sell'])->name('seller.sell');

Route::get('seller/create', [ProductController::class,'create'])->name('seller.create');

Route::post('seller/store', [ProductController::class,'store'])->name('seller.store');

Route::get('seller/shop', [ProductController::class,'shop'])->name('seller.shop');

Route::get('seller/{id}/edit', [ProductController::class,'edit'])->name('seller.edit');

Route::put('seller/{id}/update', [ProductController::class,'update'])->name('seller.update');

Route::delete('seller/{id}/delete', [ProductController::class,'destroy'])->name('seller.delete');

});