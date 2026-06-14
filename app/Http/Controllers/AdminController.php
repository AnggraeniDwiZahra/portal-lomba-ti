<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition; 
use App\Models\Category;
use App\Models\User;
use App\Models\Level;

class AdminController extends Controller
{
    // 1. Dashboard Overview
    public function index() { 
        $semuaKategori = Category::all();
        $totalKompetisi = Competition::count();
        $pendaftaranAktif = Competition::where('deadline', '>=', now())->count();
        $totalLevel = \App\Models\Level::count();
        $kompetisiTerkini = Competition::with('level')->latest()->take(3)->get();

        return view('admin.dashboard', compact('totalKompetisi', 'pendaftaranAktif', 'totalLevel', 'kompetisiTerkini', 'semuaKategori'));    
    }

    // 2. Tampil Daftar Lomba
    public function kelolaLomba(Request $request) {
        $query = Competition::with('level');

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'LIKE', '%' . $request->search . '%');
        }

        // Variabel wajib tetap $semuaLomba agar sesuai dengan @forelse di blade
        $semuaLomba = $query->get(); 

        return view('admin.lomba', compact('semuaLomba'));
    }

    // 3. Form Tambah Lomba
    public function tambahLomba() { 
        $semuaKategori = Category::all();
        $semuaLevel = Level::all();

        return view('admin.lomba.create', compact('semuaKategori', 'semuaLevel'));
    }

    // 4. Proses Simpan Lomba
    public function simpanLomba(Request $request) {
        return redirect()->route('admin.lomba')->with('success', 'Lomba berhasil ditambahkan!');
    }

    // 5. Form Edit Lomba
    public function editLomba($id) {
        $lomba = Competition::findOrFail($id); 
        $semuaKategori = Category::all();
        $semuaLevel = Level::all();

        return view('admin.lomba.edit', compact('lomba', 'semuaKategori', 'semuaLevel'));
    }

    // 6. Proses Update Lomba
    public function updateLomba(Request $request, $id) {
        return redirect()->route('admin.lomba')->with('success', 'Lomba berhasil diperbarui!');
    }

    // 7. Proses Hapus Lomba 
    public function hapusLomba($id) {
        $lomba = Competition::findOrFail($id);
        $lomba->delete();
        return redirect()->route('admin.lomba')->with('success', 'Kompetisi berhasil dihapus selamanya!');
    }

   // 8. Tampil Halaman Kategori (Sudah diperbaiki biar ngelempar data)
    public function kategori() {
        $semuaKategori = Category::all();
        return view('admin.kategori', compact('semuaKategori')); 
    }

    // Proses Simpan Kategori Baru
    public function simpanKategori(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.kategori')->with('success', 'Kategori baru berhasil ditambahkan!');
    }

    // Form Edit Kategori
    public function editKategori($id) {
        $kategori = Category::findOrFail($id);
            return view('admin.kategori.edit', compact('kategori'));
    }

    // Proses Update Kategori
    public function updateKategori(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $kategori = Category::findOrFail($id);
        $kategori->update([
            'name' => $request->name
        ]);

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil diperbarui!');
    }

    // Proses Hapus Kategori
    public function hapusKategori($id) {
        $kategori = Category::findOrFail($id);
        $kategori->delete();

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil dihapus!');
    }

    // 9. Tampil Halaman Pengguna
    public function pengguna() {
        $semuaPengguna = User::all(); // Mengambil semua data user (Admin, Mahasiswa, dll)
        return view('admin.pengguna', compact('semuaPengguna'));
    }

    // 10. Tampil Halaman Pengaturan
    public function pengaturan() {
        return view('admin.pengaturan');
    }
}