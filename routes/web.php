<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HeadCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\BrandController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [PageController::class, 'index']);
Route::get('/wishes', [PageController::class, 'wishes'])->name('wishes.index')->middleware('auth');
Route::get('/account', [PageController::class, 'account'])->name('account')->middleware('auth');
Route::get('/card', [PageController::class, 'card'])->name('card')->middleware('auth');
Route::get('/adminpage', [PageController::class, 'admin'])->name('admin')->middleware('admin');
Route::post('cards/{product}/store', [CardController::class, 'store'])->name('cards.store')->middleware('admin');
Route::post('cards/{product}/delete', [CardController::class, 'destroy'])->name('cards.delete')->middleware('admin');
Route::post('wishes/{product}/delete', [WishController::class, 'destroy'])->name('wishes.delete')->middleware('admin');
Route::post('wishes/{product}/store', [WishController::class, 'store'])->name('wishes.store')->middleware('admin');