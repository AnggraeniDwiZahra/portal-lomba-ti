<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailLombaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/lomba', [LombaController::class, 'index'])->name('lomba.index');
Route::get('/lomba/{slug}', [LombaController::class, 'show'])->name('lomba.show');
Route::get('/detail-lomba', [DetailLombaController::class, 'index'])->name('lomba.detail');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/{slug}', [KategoriController::class, 'detailKategori'])->name('kategori.detail');
Route::get('/panduan', [PanduanController::class, 'index'])->name('panduan.index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

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