<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HeadCategoryController;
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



Auth::routes();

Route::resource('/products', ProductController::class)->middleware('admin');
Route::resource('/categories', CategoryController::class)->middleware('admin');
Route::resource('/headcategories', HeadCategoryController::class)->middleware('admin');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [PageController::class, 'index']);
Route::get('/account', [PageController::class, 'account'])->name('account')->middleware('auth');
Route::get('/wishlist', [PageController::class, 'wishlist'])->name('wishlist')->middleware('auth');
Route::get('/adminpage', [PageController::class, 'admin'])->name('admin')->middleware('admin');
Route::put('headcategories/{headcategory}', [HeadCategoryController::class, 'update'])->middleware('admin');
Route::put('categories/{category}', [CategoryController::class, 'update'])->middleware('admin');
Route::post('categories/{category}/delete', [CategoryController::class, 'destroy'])->middleware('admin');
Route::post('headcategories/{headcategory}/delete', [HeadCategoryController::class, 'destroy'])->middleware('admin');
Route::put('products/{product}', [ProductController::class, 'update'])->middleware('admin');
Route::post('products/{product}', [ProductController::class, 'destroy'])->middleware('admin');