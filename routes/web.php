<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\RuangController;
use Illuminate\Support\Facades\Route;

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

Route::get('/barang', [BarangController::class, 'index'])->name('br');
Route::get('/barang/create', [BarangController::class, 'create'])->name('br.create');
Route::post('/barang/store', [BarangController::class, 'store'])->name('br.store');
Route::delete('/barang/delete/{id}', [BarangController::class, 'destroy'])->name('br.delete');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('br.edit');
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('br.update');

Route::get('/ruang', [RuangController::class, 'index'])->name('rg');
Route::get('/ruang/create', [RuangController::class, 'create'])->name('rg.create');
Route::post('/ruang/store', [RuangController::class, 'store'])->name('rg.store');
Route::delete('/ruang/delete/{id}', [RuangController::class, 'destroy'])->name('rg.delete');
Route::get('/ruang/edit/{id}', [RuangController::class, 'edit'])->name('rg.edit');
Route::put('/ruang/update/{id}', [RuangController::class, 'update'])->name('rg.update');

