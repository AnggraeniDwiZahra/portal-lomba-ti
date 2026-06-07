<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori');
    }

    public function detailKategori($slug)
    {
        $namaKategori = Str::title(str_replace('-', ' ', $slug));
        return view('kategori-detail', compact('namaKategori', 'slug'));
    }
}
