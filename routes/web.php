<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsRegionController;
use App\Http\Controllers\ProductstypeContorller;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\EquipmentProductController;
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
    Route::get('/productsdetail-{id}',[HomeController::class, 'productdetail'])->name('productdetail');
//

//
//Backend

//Dashboard
    Route::middleware('auth')->get('/home',[HomeController::class, 'dashboard'])->name('dashboard');
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

//Equipment
Route::middleware('auth')->prefix('/equipment')->group(function(){
    Route::get('/index',[EquipmentController::class,'index'])->name('equipment.index');
    Route::get('/create',[EquipmentController::class,'create'])->name('equipment.create');
    Route::post('/store',[EquipmentController::class,'store'])->name('equipment.store');
    Route::get('/detail/{id}',[EquipmentController::class,'detail'])->name('equipment.detail');
    Route::get('/edit/{id}',[EquipmentController::class,'edit'])->name('equipment.edit');
    Route::put('/update/{id}',[EquipmentController::class,'update'])->name('equipment.update');
    Route::get('/delete/{id}',[EquipmentController::class,'delete'])->name('equipment.delete');
});

//Equipmentproduct
Route::middleware('auth')->prefix('/equipmentproduct')->group(function(){
    Route::get('/index',[EquipmentProductController::class,'index'])->name('equipmentproduct.index');
    Route::get('/create',[EquipmentProductController::class,'create'])->name('equipmentproduct.create');
    Route::post('/store',[EquipmentProductController::class,'store'])->name('equipmentproduct.store');
    Route::get('/detail/{id}',[EquipmentProductController::class,'detail'])->name('equipmentproduct.detail');
    Route::get('/edit/{id}',[EquipmentProductController::class,'edit'])->name('equipmentproduct.edit');
    Route::put('/update/{id}',[EquipmentProductController::class,'update'])->name('equipmentproduct.update');
    Route::get('/delete/{id}',[EquipmentProductController::class,'delete'])->name('equipmentproduct.delete');
});

//Laravel File Manager & CKEditor
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
