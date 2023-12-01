<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\BarangRuangController;
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

Route::get('/pinjaman', [PinjamanController::class, 'index'])->name('pn');
Route::get('/pinjaman/create', [PinjamanController::class, 'create'])->name('pn.create');
Route::post('/pinjaman/store', [PinjamanController::class, 'store'])->name('pn.store');
Route::delete('/pinjaman/delete/{id}', [PinjamanController::class, 'destroy'])->name('pn.delete');
Route::get('/pinjaman/edit/{id}', [PinjamanController::class, 'edit'])->name('pn.edit');
Route::put('/pinjaman/update/{id}', [PinjamanController::class, 'update'])->name('pn.update');

Route::get('/barangruang', [BarangRuangController::class, 'index'])->name('bg');
Route::get('/barangruang/create', [BarangRuangController::class, 'create'])->name('bg.create');
Route::post('/barangruang/store', [BarangRuangController::class, 'store'])->name('bg.store');
Route::delete('/barangruang/delete/{id}', [BarangRuangController::class, 'destroy'])->name('bg.delete');
Route::get('/barangruang/edit/{id}', [BarangRuangController::class, 'edit'])->name('bg.edit');
Route::put('/barangruang/update/{id}', [BarangRuangController::class, 'update'])->name('bg.update');
