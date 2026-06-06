<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lomba; 

class AdminController extends Controller
{
    public function index() { return view('admin.dashboard'); }

    public function kelolaLomba() {
        $semuaLomba = Lomba::all();
        return view('admin.lomba.index', compact('semuaLomba'));
    }

    public function tambahLomba() { return view('admin.lomba.create'); }

    public function simpanLomba(Request $request) {
        return redirect()->route('admin.lomba.kelola')->with('success', 'Lomba berhasil ditambahkan!');
    }

    public function editLomba($id) {
        $lomba = Lomba::findOrFail($id);
        return view('admin.lomba.edit', compact('lomba'));
    }

    public function updateLomba(Request $request, $id) {
        return redirect()->route('admin.lomba.kelola')->with('success', 'Lomba berhasil diperbarui!');
    }

    public function hapusLomba($id) {
        Lomba::destroy($id);
        return redirect()->route('admin.lomba.kelola')->with('success', 'Lomba berhasil dihapus!');
    }
}