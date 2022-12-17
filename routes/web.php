<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use Illuminate\Http\Request;
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

// Client
//vaizdas
Route::get('/klientai/index',[ClientController::class, 'index'])->name('klientai.index');
Route::get('/klientai/create', [ClientController::class, 'create'])->name('klientai.create');
Route::get('/klientai/edit/{client}',[ClientController::class, 'edit'])->name('klientai.edit');
Route::get('/klientai/show/{client}',[ClientController::class, 'show'])->name('klientai.show');
//veiksmas
Route::post('/klientai/store',[ClientController::class, 'store'])->name('klientai.store');
Route::post('/klientai/update/{client}', [ClientController::class, 'update'])->name('klientai.update');
Route::post('/klientai/destroy/{client}', [ClientController::class, 'destroy'])->name('klientai.destroy');


// Products
//vaizdas
Route::get('/prekes/index',[ProductController::class, 'index'])->name('prekes.index');
Route::get('/prekes/create', [ProductController::class, 'create'])->name('prekes.create');
Route::get('/prekes/edit/{product}',[ProductController::class, 'edit'])->name('prekes.edit');
Route::get('/prekes/show/{product}',[ProductController::class, 'show'])->name('prekes.show');

// veiksmas
Route::post('/prekes/store',[ProductController::class, 'store'])->name('prekes.store');
Route::post('/prekes/update/{product}', [ProductController::class, 'update'])->name('prekes.update');
Route::post('/prekes/destroy/{product}', [ProductController::class, 'destroy'])->name('prekes.destroy');


// Sale
// vaizdas
Route::get('/pardavimai/index',[SaleController::class, 'index'])->name('pardavimai.index');
Route::get('/pardavimai/create', [SaleController::class, 'create'])->name('pardavimai.create');
Route::get('/pardavimai/edit/{sale}',[SaleController::class, 'edit'])->name('pardavimai.edit');
Route::get('/pardavimai/show/{sale}',[SaleController::class, 'show'])->name('pardavimai.show');

// veiksmas
Route::post('/pardavimai/store',[SaleController::class, 'store'])->name('pardavimai.store');
Route::post('/pardavimai/update/{sale}', [SaleController::class, 'update'])->name('pardavimai.update');
// Route::post('/pardavimai/destroy/{product}', [SaleController::class, 'destroy'])->name('pardavimai.destroy');