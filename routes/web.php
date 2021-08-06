<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ProductController;
/*
|----------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function(){

    Route::resource('admin/category',CategoryController::class);
    Route::post('admin/category/show/{id}',[CategoryController::class,'show'])->name('category.show');
    
    Route::resource('admin/brand',BrandController::class);
    Route::post('admin/brand/show/{id}',[BrandController::class,'show'])->name('brand.show');
    
    Route::resource('admin/size',SizeController::class);
    Route::post('admin/size/show/{id}',[SizeController::class,'show'])->name('size.show');
    
    Route::resource('admin/product',ProductController::class);
    Route::post('admin/product/show/{id}',[ProductController::class,'show'])->name('product.show');
    

    
    
});

// temp route
Route::get('/template',function(){
    return view('layouts.master');
});