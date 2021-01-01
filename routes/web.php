<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsRegionController;
use App\Http\Controllers\ProductsByRegionController;
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

//Navbar
    Route::get('/',[HomeController::class, 'home'])->name('home');
    Route::get('/products',[HomeController::class, 'products'])->name('products');
    Route::get('/productsbyregion',[HomeController::class, 'productsbyregion'])->name('productsbyregion');
//

// Route::get('/', function () {
//     return view('frontend.homepage');
// });

// Route::get('/productlist', function () {
//     return view('frontend.productlist');
// });

// Route::get('/productregion', function () {
//     return view('frontend.productregion');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Frontend

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


// Route::middleware('auth')->prefix('/productsbyregion')->group(function(){
//     Route::get('/index',[ProductsByRegionController::class,'index'])->name('productsbyregion.index');
//     Route::get('/create',[ProductsByRegionController::class,'create'])->name('productsbyregion.create');
//     Route::post('/store',[ProductsByRegionController::class,'store'])->name('productsbyregion.store');
//     Route::get('/detail/{id}',[ProductsByRegionController::class,'detail'])->name('productsbyregion.detail');
//     Route::put('/update/{id}',[ProductsByRegionController::class,'update'])->name('productsbyregion.update');
//     Route::get('/delete/{id}',[ProductsByRegionController::class,'delete'])->name('productsbyregion.delete');

// });
