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