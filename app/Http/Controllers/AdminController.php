<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition; 
use App\Models\Category;
use App\Models\User;
use App\Models\Level;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
   // 4. Proses Simpan Lomba
    public function simpanLomba(Request $request) {
        // 1. Validasi semua data yang dikirim dari form blade
        $request->validate([
            'title'             => 'required|string|max:255',
            'description'       => 'required|string',
            'category_id'       => 'required|exists:categories,id',
            'level_id'          => 'required|exists:levels,id',
            'registration_link' => 'required|url',
            'deadline'          => 'required|date',
            'poster'            => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi gambar
        ]);

        // 2. Proses upload gambar poster jika admin memilih file
        $pathPoster = null;
        if ($request->hasFile('poster')) {
            // Menyimpan file ke folder storage/app/public/posters
            $pathPoster = $request->file('poster')->store('posters', 'public');
        }

        // 3. Masukkan semua data ke database
      Competition::create([
            'user_id'           => \Illuminate\Support\Facades\Auth::id(),
            'title'             => $request->title,
            'description'       => $request->description,
            'category_id'       => $request->category_id,
            'level_id'          => $request->level_id,
            'registration_link' => $request->registration_link,
            'deadline'          => $request->deadline,
            'poster'            => $pathPoster, 
        ]);

        // 4. Redirect kembali dengan pesan sukses
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
        // 1. Cari data lomba yang mau diedit berdasarkan ID
        $lomba = Competition::findOrFail($id);

        // 2. Validasi input form
        $request->validate([
            'title'             => 'required|string|max:255',
            'description'       => 'required|string',
            'category_id'       => 'required|exists:categories,id',
            'level_id'          => 'required|exists:levels,id',
            'registration_link' => 'required|url',
            'deadline'          => 'required|date',
            'poster'            => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
        ]);

        // 3. Tangani gambar poster
        // Secara default, gunakan nama file gambar yang lama
        $pathPoster = $lomba->poster; 

        // Tapi JIKA admin mengupload gambar baru...
        if ($request->hasFile('poster')) {
            // (Opsional) Hapus gambar lama dari server agar tidak memenuhi penyimpanan
            if ($lomba->poster && \Illuminate\Support\Facades\Storage::disk('public')->exists($lomba->poster)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($lomba->poster);
            }
            
            // Simpan gambar yang baru
            $pathPoster = $request->file('poster')->store('posters', 'public');
        }

        // 4. Update data ke database
        $lomba->update([
            'title'             => $request->title,
            'description'       => $request->description,
            'category_id'       => $request->category_id,
            'level_id'          => $request->level_id,
            'registration_link' => $request->registration_link,
            'deadline'          => $request->deadline,
            'poster'            => $pathPoster,
        ]);

        // 5. Kembalikan ke halaman daftar dengan pesan sukses
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
        $terakhirDiperbarui = User::max('updated_at'); // Mengambil timestamp terakhir kali data user diperbarui
        return view('admin.pengguna', compact('semuaPengguna', 'terakhirDiperbarui'));
    }

    // 10. Tampil Halaman Pengaturan
    public function pengaturan() {
        return view('admin.pengaturan');
    }

    public function updatePassword(Request $request)
    {
        // Validasi
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Cek apakah password lama benar
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini salah!']);
        }

        // Update password
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password berhasil diperbarui!');
    }
}