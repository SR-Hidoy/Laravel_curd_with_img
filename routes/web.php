<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/add-product', [ProductController::class,'index'])->name('add.product');
Route::get('/product-list', [ProductController::class,'productList'])->name('product.list');
Route::post('/delete-product', [ProductController::class,'productDelete'])->name('delete.product');
Route::get('/edit-product/{id}', [ProductController::class,'productEdit'])->name('edit.product');
