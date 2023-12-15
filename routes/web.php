<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('detail/{car:slug}', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [\App\Http\Controllers\HomeController::class, 'contactStore'])->name('contact.store');

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::post('/user/update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('users.edit');
Route::get('/user/destroy/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

Route::group(['middleware' => 'role', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('cars', \App\Http\Controllers\Admin\CarController::class);
    Route::put('cars/update-image/{id}', [\App\Http\Controllers\Admin\CarController::class, 'updateImage'])->name('cars.updateImage');

    Route::get('messages', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{message}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('messages.destroy');
});


//CRUD DATA JENISBARANG
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/tampilcreate', [PelangganController::class, 'tampilcreate'])->name('pelanggan.tampilcreate');
Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan/tampiledit', [PelangganController::class, 'tampiledit'])->name('pelanggan.tampiledit');
Route::post('/pelanggan/update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/destroy/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/tampilcreate', [TransaksiController::class, 'tampilcreate'])->name('transaksi.tampilcreate');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/tampiledit', [TransaksiController::class, 'tampiledit'])->name('transaksi.tampiledit');
Route::post('/transaksi/update/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/destroy/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');

Auth::routes();
