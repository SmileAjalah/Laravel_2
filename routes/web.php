<?php

use App\Http\Controllers\BarangController;
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

Route::get('/', [BarangController::class, 'index'])->name('br');
Route::get('/create', [BarangController::class, 'create'])->name('br.create');
Route::post('/store', [BarangController::class, 'store'])->name('br.store');
Route::delete('/delete/{id}', [BarangController::class, 'destroy'])->name('br.delete');
Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('br.edit');
Route::put('/update/{id}', [BarangController::class, 'update'])->name('br.update');

