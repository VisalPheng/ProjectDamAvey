<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsRegionController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Products
Route::middleware('auth')->prefix('/products')->group(function(){
    Route::get('/index',[ProductsController::class,'index'])->name('products.index');
    Route::get('/create',[ProductsController::class,'create'])->name('products.create');
    Route::post('/store',[ProductsController::class,'store'])->name('products.store');
    Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('products.edit');
    Route::put('/update/{id}',[ProductsController::class,'update'])->name('products.update');
    Route::get('/delete/{id}',[ProductsController::class,'delete'])->name('products.delete');
});

//ProductsRegion
Route::middleware('auth')->prefix('/productsregion')->group(function(){
    Route::get('/index',[ProductsRegionController::class,'index'])->name('productsregion.index');
    Route::get('/create',[ProductsRegionController::class,'create'])->name('productsregion.create');
    Route::post('/store',[ProductsRegionController::class,'store'])->name('productsregion.store');
    Route::get('/edit/{id}',[ProductsRegionController::class,'edit'])->name('productsregion.edit');
    Route::put('/update/{id}',[ProductsRegionController::class,'update'])->name('productsregion.update');
    Route::get('/delete/{id}',[ProductsRegionController::class,'delete'])->name('productsregion.delete');
});