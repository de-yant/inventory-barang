<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

//dashboard
use App\Http\Controllers\KategoryController;

//stok awal
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\StokAwal\StokController;
use App\Http\Controllers\DivisiController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //kategori
    Route::get('kategory', [KategoryController::class, 'index'])->name('kategory.index');
    Route::post('kategory', [KategoryController::class, 'store'])->name('kategory.store');
    Route::get('kategory/{id}/edit', [KategoryController::class, 'edit'])->name('kategory.edit');
    Route::put('kategory/{id}', [KategoryController::class, 'update'])->name('kategory.update');
    Route::get('kategory/{id}', [KategoryController::class, 'destroy'])->name('kategory.destroy');

    //divisi
    Route::get('divisi', [DivisiController::class, 'index'])->name('divisi.index');
    Route::post('divisi', [DivisiController::class, 'store'])->name('divisi.store');
    Route::get('divisi/{id}/edit', [DivisiController::class, 'edit'])->name('divisi.edit');
    Route::put('divisi/{id}', [DivisiController::class, 'update'])->name('divisi.update');
    Route::get('divisi/{id}', [DivisiController::class, 'destroy'])->name('divisi.destroy');

    //data barang
    Route::get('databarang', [StokController::class, 'index'])->name('databarang.index');
    Route::get('databarang/{id}/show', [KategoryController::class, 'show'])->name('databarang.show');
    Route::post('databarang', [StokController::class, 'store'])->name('databarang.store');
    Route::get('databarang/{id}/edit', [StokController::class, 'edit'])->name('databarang.edit');
    Route::put('databarang/{id}', [StokController::class, 'update'])->name('databarang.update');
    Route::get('databarang/{id}', [StokController::class, 'destroy'])->name('databarang.destroy');

    //barang masuk
    Route::get('barangmasuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');
    Route::get('barangmasuk/{id}/show', [BarangMasukController::class, 'show'])->name('barangmasuk.show');
    Route::get('barangmasuk/add', [BarangMasukController::class, 'create'])->name('barangmasuk.create');
    Route::get('barangmasuk/kategory/{id}', [BarangMasukController::class, 'getStok'])->name('barangmasuk.getStok');
    Route::post('barangmasuk/add', [BarangMasukController::class, 'store'])->name('barangmasuk.store');
    // Route::get('barangmasuk/printpdf', [BarangMasukController::class, 'printpdf'])->name('barangmasuk.printpdf');

    //barang keluar
    Route::get('barangkeluar', [BarangKeluarController::class, 'index'])->name('barangkeluar.index');
    Route::get('barangkeluar/{id}/show', [BarangKeluarController::class, 'show'])->name('barangkeluar.show');
    Route::get('barangkeluar/add', [BarangKeluarController::class, 'create'])->name('barangkeluar.create');
    Route::get('barangkeluar/kategory/{id}', [BarangKeluarController::class, 'getStok'])->name('barangkeluar.getStok');
    Route::post('barangkeluar/add', [BarangKeluarController::class, 'store'])->name('barangkeluar.store');
    Route::get('barangkeluar/pdf', [BarangKeluarController::class, 'pdf'])->name('barangkeluar.pdf');



});

