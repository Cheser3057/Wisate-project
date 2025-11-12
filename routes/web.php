<?php

use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('Ui.home');
});


Route::get('/tiket/pemesanan/{id}', [TiketController::class, 'pemesanan'])->name('tiket.pemesanan');


Route::get('/tiket/create', [TiketController::class, 'create'])->name('tiket.create');
Route::get('/tiket/index', [TiketController::class, 'index'])->name('tiket.index');
Route::post('/tiket/store', [TiketController::class, 'store'])->name('tiket.store');


Route::patch('/tiket/{id}/status',[TiketController::class,'updateStatus'])->name('tiket.updateStatus');


Route::get('/tiket/cek-pemesanan', [TiketController::class, 'cekForm'])->name('tiket.cek-pemesanan');
Route::post('/tiket/cek-pemesanan', [TiketController::class, 'cekPemesanan'])->name('tiket.cek-pemesanan');
