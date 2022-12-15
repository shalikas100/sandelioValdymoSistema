<?php

use App\Http\Controllers\ClientController;
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

// client
//vaizdas
Route::get('/klientai/index',[ClientController::class, 'index'])->name('klientai.index');
Route::get('klientai/create', [ClientController::class, 'create'])->name('klientai.create');
Route::get('/klientai/edit/{client}',[ClientController::class, 'edit'])->name('klientai.edit');
Route::get('/klientai/show/{client}',[ClientController::class, 'show'])->name('klientai.show');
//veiksmas
Route::post('/klientai/store',[ClientController::class, 'store'])->name('klientai.store');
Route::post('/klientai/update/{client}', [ClientController::class, 'update'])->name('klientai.update');
Route::post('/klientai/destroy/{client}', [ClientController::class, 'destroy'])->name('klientai.destroy');