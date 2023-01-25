<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HeadCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MessageController;

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

Route::resource('/products', ProductController::class)->middleware('admin');
Route::resource('/categories', CategoryController::class)->middleware('admin');
Route::resource('/ads', AdController::class)->middleware('admin');
Route::resource('/headcategories', HeadCategoryController::class)->middleware('admin');
Route::resource('/brands', BrandController::class)->middleware('admin');
Route::resource('/orders', OrderController::class)->middleware('admin');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/singleproduct{product}', [PageController::class, 'singleproduct'])->name('singleproduct');
Route::get('/brand_products{brand}', [PageController::class, 'brand_products'])->name('brand_products');
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/wishes', [PageController::class, 'wishes'])->name('wishes.index')->middleware('auth');
Route::get('/account', [PageController::class, 'account'])->name('account')->middleware('auth');
Route::get('/messages', [MessageController::class, 'index'])->name('messages.index')->middleware('admin');
Route::get('/cart', [PageController::class, 'cart'])->name('cart')->middleware('auth');
Route::get('/adminpage', [PageController::class, 'admin'])->name('admin')->middleware('admin');
Route::get('/users', [PageController::class, 'users'])->name('users')->middleware('admin');
Route::post('/carts/{product}/store', [CartController::class, 'store'])->name('carts.store')->middleware('auth');
// Route::post('/carts/{product}/update', [CartController::class, 'update'])->name('carts.update')->middleware('auth');
Route::post('/carts/{product}/delete', [CartController::class, 'destroy'])->name('carts.delete')->middleware('auth');
Route::post('/wishes/{product}/delete', [WishController::class, 'destroy'])->name('wishes.delete')->middleware('auth');
Route::post('/wishes/{product}/store', [WishController::class, 'store'])->name('wishes.store')->middleware('auth');
Route::post('/informations/store', [InformationController::class, 'store'])->name('informations.store')->middleware('admin');
Route::post('/messages/store', [MessageController::class, 'store'])->name('messages.store');
Route::put('/informations/{info}/update', [InformationController::class, 'update'])->name('informations.update')->middleware('admin');