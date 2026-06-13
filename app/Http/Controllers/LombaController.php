<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Category;
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
}