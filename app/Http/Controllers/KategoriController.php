<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('kategori', compact('categories'));
    }

// Tambahkan parameter $id di depan $slug
public function detailKategori(Request $request, $id, $slug)
{
    // 1. Cari kategori langsung berdasarkan ID (Anti-Error Karakter Spesial)
    $category = Category::findOrFail($id);
    
    // Simpan nama asli kategori untuk judul halaman
    $namaKategori = $category->name;

    // 2. Mulai Query Kompetisi beserta relasi level-nya
    $competitionsQuery = $category->competitions()->with('level');

    // 3. FILTER STATUS (Opened / Closed)
    if ($request->has('status')) {
        $now = \Carbon\Carbon::now();
        if ($request->status == 'open') {
            $competitionsQuery->where('deadline', '>=', $now);
        } elseif ($request->status == 'closed') {
            $competitionsQuery->where('deadline', '<', $now);
        }
    }

    // 4. FILTER TINGKAT WILAYAH
    if ($request->has('levels')) {
        $competitionsQuery->whereHas('level', function($query) use ($request) {
            $query->whereIn('name', $request->levels);
        });
    }

    // 5. Eksekusi query
    $competitions = $competitionsQuery->get();

    return view('kategori-detail', compact('category', 'competitions', 'namaKategori'));
}
}