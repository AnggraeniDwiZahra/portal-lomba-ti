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

    public function detailKategori($slug)
    {
        $namaKategori = Str::title(str_replace('-', ' ', $slug));
        return view('kategori-detail', compact('namaKategori', 'slug'));
    }
}