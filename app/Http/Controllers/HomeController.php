<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Competition; 
use App\Models\Category; 

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $semuaKategori = Category::all(); 

        $queryLomba = Competition::with('level');

        // 2. Cek apakah ada parameter 'category' di URL (misal: ?category=3)
        if ($request->has('category') && $request->category != '') {
            $queryLomba->where('category_id', $request->category);
        }

        // 3. Ambil data finalnya dengan urutan terbaru
        $semuaLomba = $queryLomba->latest()->get();

        return view('index', compact('semuaLomba', 'semuaKategori'));
    }
}