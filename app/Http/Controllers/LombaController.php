<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Category;
use App\Models\Level; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;

class LombaController extends Controller 
{
    public function index(Request $request) 
    {
        $categories = Category::all();

        $listLomba = Competition::when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })
            ->when($request->category_id, function ($query) use ($request) {
                $query->where('category_id', $request->category_id);
            })
            ->get();

        return view('lomba.index', compact('listLomba', 'categories'));
    }

    public function toggleSave($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu.');
        }

        $user = Auth::user();
        // `.toggle()` otomatis menambah data ke pivot jika belum ada, dan menghapus jika sudah ada
        $user->savedCompetitions()->toggle($id);

        return redirect()->back()->with('success', 'Status simpanan lomba berhasil diperbarui!');
    }

    //Form tambah kompetisi baru untuk Admin
    public function create()
    {
        $semuaKategori = Category::all();
        $semuaLevel = Level::all();

        return view('admin.lomba.create', compact('semuaKategori', 'semuaLevel'));
    }

    public function detail($id)
    {
        $lomba = Competition::findOrFail($id);
    
        return view('detail-lomba', compact('lomba'));
    }

    public function show($id)
    {
        return $this->detail($id);
    }
}