<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\ProductController::class,'index'])->name('home.index');
Route::post('/', [\App\Http\Controllers\ProductController::class,'search'])->name('home.search');
Route::get('/create', [\App\Http\Controllers\ProductController::class,'create'])->name('product.create');
Route::post('/create', [\App\Http\Controllers\ProductController::class,'store'])->name('product.store');
Route::get('/list', [\App\Http\Controllers\ProductController::class,'productList'])->name('product.list');

Route::get('/{id}/edit', [\App\Http\Controllers\ProductController::class,'edit'])->name('product.edit');
Route::post('/{id}/edit', [\App\Http\Controllers\ProductController::class,'update'])->name('product.update');
Route::get('/{id}/delete', [\App\Http\Controllers\ProductController::class,'delete'])->name('product.delete');
