<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition; // Pastikan menggunakan model Competition sesuai setingan Daffa

class AdminController extends Controller
{
    // 1. Dashboard Overview
    public function index() { 
        return view('admin.dashboard'); 
    }

    // 2. Tampil Daftar Lomba
    public function kelolaLomba() {
        $semuaLomba = Competition::all(); 
        return view('admin.lomba', compact('semuaLomba'));
    }

    // 3. Form Tambah Lomba
    public function tambahLomba() { 
        return view('admin.lomba.create'); 
    }

    // 4. Proses Simpan Lomba
    public function simpanLomba(Request $request) {
        return redirect()->route('admin.lomba')->with('success', 'Lomba berhasil ditambahkan!');
    }

    // 5. Form Edit Lomba
    public function editLomba($id) {
        $lomba = Competition::findOrFail($id); 
        return view('admin.lomba.edit', compact('lomba'));
    }

    // 6. Proses Update Lomba
    public function updateLomba(Request $request, $id) {
        return redirect()->route('admin.lomba')->with('success', 'Lomba berhasil diperbarui!');
    }

    // 7. Proses Hapus Lomba (Yang tadi kita tambahkan)
    public function hapusLomba($id) {
        $lomba = Competition::findOrFail($id);
        $lomba->delete();
        return redirect()->route('admin.lomba')->with('success', 'Kompetisi berhasil dihapus selamanya!');
    }

    // 8. Tampil Halaman Kategori (SOLUSI EROR KAMU)
    public function kategori() {
        // Nanti kalau sudah ada model Category, tinggal diganti: Category::all();
        return view('admin.kategori');
    }

    // 9. Tampil Halaman Pengguna (BIAR GAK EROR KELANJUTAN)
    public function pengguna() {
        // Nanti kalau mau ambil data user dari DB, tinggal panggil model User
        return view('admin.pengguna');
    }

    // 10. Tampil Halaman Pengaturan
    public function pengaturan() {
        return view('admin.pengaturan');
    }
}