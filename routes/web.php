<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'index'])->name('products.index');
Route::get('/product/create',[ProductController::class,'create'])->name('porducts.create');
Route::post('/product/store',[ProductController::class,'store'])->name('products.store');
Route::get('/products',[ProductController::class,'show'])->name('products.show');
Route::get('/deleteProduct/{product:id}',[ProductController::class,'destroy'])->name('products.destroy');

