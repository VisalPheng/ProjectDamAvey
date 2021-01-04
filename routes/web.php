<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsRegionController;
use App\Http\Controllers\ProductstypeContorller;
use App\Http\Controllers\HomeController;

Auth::routes();
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
//Frontend

//Navbar
    Route::get('/',[HomeController::class, 'home'])->name('home');
    Route::get('/products',[HomeController::class, 'products'])->name('products');
    Route::get('/productsbyregion',[HomeController::class, 'productsbyregion'])->name('productsbyregion');
    Route::get('/productsdetail{id}',[HomeController::class, 'productdetail'])->name('productdetail');
//

//
//Backend

//Dashboard
    Route::middleware('auth')->get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');
//

//Products
Route::middleware('auth')->prefix('/products')->group(function(){
    Route::get('/index',[ProductsController::class,'index'])->name('products.index');
    Route::get('/create',[ProductsController::class,'create'])->name('products.create');
    Route::post('/store',[ProductsController::class,'store'])->name('products.store');
    Route::get('/detail/{id}',[ProductsController::class,'detail'])->name('products.detail');
    Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('products.edit');
    Route::put('/update/{id}',[ProductsController::class,'update'])->name('products.update');
    Route::get('/delete/{id}',[ProductsController::class,'delete'])->name('products.delete');
});
//

//ProductsRegion
Route::middleware('auth')->prefix('/productsregion')->group(function(){
    Route::get('/index',[ProductsRegionController::class,'index'])->name('productsregion.index');
    Route::get('/create',[ProductsRegionController::class,'create'])->name('productsregion.create');
    Route::post('/store',[ProductsRegionController::class,'store'])->name('productsregion.store');
    Route::get('/detail/{id}',[ProductsRegionController::class,'detail'])->name('productsregion.detail');
    Route::get('/edit/{id}',[ProductsRegionController::class,'edit'])->name('productsregion.edit');
    Route::put('/update/{id}',[ProductsRegionController::class,'update'])->name('productsregion.update');
    Route::get('/delete/{id}',[ProductsRegionController::class,'delete'])->name('productsregion.delete');
});

<<<<<<< HEAD
//Productstype
Route::middleware('auth')->prefix('/productstype')->group(function(){
    Route::get('/index',[ProductstypeContorller::class,'index'])->name('productstype.index');
    Route::get('/create',[ProductstypeContorller::class,'create'])->name('productstype.create');
    Route::post('/store',[ProductstypeContorller::class,'store'])->name('productstype.store');
    Route::get('/detail/{id}',[ProductstypeContorller::class,'detail'])->name('productstype.detail');
    Route::get('/edit/{id}',[ProductstypeContorller::class,'edit'])->name('productstype.edit');
    Route::put('/update/{id}',[ProductstypeContorller::class,'update'])->name('productstype.update');
    Route::get('/delete/{id}',[ProductstypeContorller::class,'delete'])->name('productstype.delete');
});
=======
//
>>>>>>> 36355123bc70483b930af904a029e854edce873c
