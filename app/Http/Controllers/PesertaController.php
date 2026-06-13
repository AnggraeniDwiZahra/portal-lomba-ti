<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PesertaController extends Controller
{
    // 1. Fungsi untuk menampilkan halaman lomba tersimpan (Data Dinamis)
    public function index()
    {
        $user = Auth::user();
        $savedCompetitions = $user->savedCompetitions; 

        return view('peserta.saved-lomba', compact('savedCompetitions'));
    }

    // 2. Fungsi untuk menampilkan halaman edit profil
    public function editProfil()
    {
        return view('peserta.profil');
    }

    // 3. Fungsi untuk memproses update nama dan foto profil
    public function updateProfil(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->name;

        if ($request->hasFile('profile_photo')) {
            if ($user->profile_picture && Storage::disk('public')->exists($user->profile_picture)) {
                Storage::disk('public')->delete($user->profile_picture);
            }

            $path = $request->file('profile_photo')->store('profiles', 'public');
            $user->profile_picture = $path;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil Anda berhasil diperbarui!');
    }
}