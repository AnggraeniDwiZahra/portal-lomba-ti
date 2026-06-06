<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/lomba', [LombaController::class, 'index'])->name('lomba.index');
Route::get('/lomba/{slug}', [LombaController::class, 'show'])->name('lomba.show');


Route::prefix('peserta')->name('peserta.')->group(function () {
    Route::get('/profil', [PesertaController::class, 'editProfil'])->name('profil.edit');
    Route::put('/profil', [PesertaController::class, 'updateProfil'])->name('profil.update');
    Route::get('/lomba-tersimpan', [PesertaController::class, 'savedLomba'])->name('saved');
    Route::get('/riwayat-lomba', [PesertaController::class, 'riwayat'])->name('riwayat');
        Route::get('/notifikasi', [PesertaController::class, 'notifikasi'])->name('notifikasi');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    
    Route::get('/lomba', [AdminController::class, 'kelolaLomba'])->name('lomba.kelola');
    Route::get('/lomba/create', [AdminController::class, 'tambahLomba'])->name('lomba.tambah');
    Route::post('/lomba/store', [AdminController::class, 'simpanLomba'])->name('lomba.simpan');
    Route::get('/lomba/{id}/edit', [AdminController::class, 'editLomba'])->name('lomba.edit');
    Route::put('/lomba/{id}/update', [AdminController::class, 'updateLomba'])->name('lomba.update');
    Route::delete('/lomba/{id}/delete', [AdminController::class, 'hapusLomba'])->name('lomba.hapus');

    Route::get('/kategori', [AdminController::class, 'kategori'])->name('kategori');
    Route::get('/pengguna', [AdminController::class, 'pengguna'])->name('pengguna');
    Route::get('/pengaturan', [AdminController::class, 'pengaturan'])->name('pengaturan');
});