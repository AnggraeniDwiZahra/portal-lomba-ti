@extends('layouts.app')

@section('content')
<div class="container py-5" style="margin-top: 50px;">
    <div class="text-center mb-5">
        <small class="text-primary fw-bold text-uppercase" style="letter-spacing: 1px;">Daftar Bidang Teknologi</small>
        <h1 class="fw-bold mt-2 mb-3">Eksplorasi Kategori Kompetisi</h1>
        <p class="text-muted mx-auto" style="max-width: 600px; font-size: 15px;">
            Temukan panggung yang tepat untuk mengasah keahlian spesifikmu. Pilih kategori di bawah ini untuk melihat semua kompetisi IT yang sedang aktif.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border border-secondary-subtle rounded-4 p-4 bg-white transition shadow-sm hover-shadow">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="p-3 rounded-4 text-primary d-flex align-items-center justify-content-center" style="background-color: #f0f5ff; width: 56px; height: 56px;">
                        <span class="material-symbols-outlined fs-2">security</span>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill" style="font-size: 12px;">
                        12 Kompetisi
                    </span>
                </div>
                <h4 class="fw-bold mb-2 text-dark" style="font-size: 18px;">Cyber Security</h4>
                <p class="text-muted small lh-relaxed mb-4">
                    Uji keahlian penetrasi sistem, kriptografi, digital forensik, dan *reverse engineering* melalui tantangan Capture The Flag (CTF) tingkat nasional maupun internasional.
                </p>
                <a href="{{ route('kategori.detail', ['slug' => 'cyber-security']) }}" class="mt-auto text-decoration-none fw-semibold small d-flex align-items-center gap-1 text-primary">
                    Lihat Lomba <span class="material-symbols-outlined fs-6">arrow_right_alt</span>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border border-secondary-subtle rounded-4 p-4 bg-white transition shadow-sm hover-shadow">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="p-3 rounded-4 text-danger d-flex align-items-center justify-content-center" style="background-color: #fff0f0; width: 56px; height: 56px;">
                        <span class="material-symbols-outlined fs-2">terminal</span>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill" style="font-size: 12px;">
                        8 Kompetisi
                    </span>
                </div>
                <h4 class="fw-bold mb-2 text-dark" style="font-size: 18px;">Competitive Programming</h4>
                <p class="text-muted small lh-relaxed mb-4">
                    Asah kecepatan berpikir logis, pemahaman algoritma kompleks, dan efisiensi struktur data dalam memecahkan masalah matematika komputer dalam durasi terbatas.
                </p>
                <a href="{{ route('kategori.detail', ['slug' => 'competitive-programming']) }}" class="mt-auto text-decoration-none fw-semibold small d-flex align-items-center gap-1 text-primary">
                    Lihat Lomba <span class="material-symbols-outlined fs-6">arrow_right_alt</span>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border border-secondary-subtle rounded-4 p-4 bg-white transition shadow-sm hover-shadow">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="p-3 rounded-4 text-warning d-flex align-items-center justify-content-center" style="background-color: #fff9e6; width: 56px; height: 56px;">
                        <span class="material-symbols-outlined fs-2">language</span>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill" style="font-size: 12px;">
                        15 Kompetisi
                    </span>
                </div>
                <h4 class="fw-bold mb-2 text-dark" style="font-size: 18px;">Web Development</h4>
                <p class="text-muted small lh-relaxed mb-4">
                    Rancang dan bangun aplikasi berbasis web inovatif yang interaktif, responsif, memiliki UI/UX menawan, serta mampu menyelesaikan permasalahan nyata di masyarakat.
                </p>
                <a href="{{ route('kategori.detail', ['slug' => 'web-development']) }}" class="mt-auto text-decoration-none fw-semibold small d-flex align-items-center gap-1 text-primary">
                    Lihat Lomba <span class="material-symbols-outlined fs-6">arrow_right_alt</span>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border border-secondary-subtle rounded-4 p-4 bg-white transition shadow-sm hover-shadow">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="p-3 rounded-4 text-success d-flex align-items-center justify-content-center" style="background-color: #f0fdf4; width: 56px; height: 56px;">
                        <span class="material-symbols-outlined fs-2">monitoring</span>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill" style="font-size: 12px;">
                        9 Kompetisi
                    </span>
                </div>
                <h4 class="fw-bold mb-2 text-dark" style="font-size: 18px;">Data Science & AI</h4>
                <p class="text-muted small lh-relaxed mb-4">
                    Gali wawasan berharga dari tumpukan data mentah, buat visualisasi data yang mendalam, dan bangun model kecerdasan buatan (Machine Learning) yang cerdas dan prediktif.
                </p>
                <a href="{{ route('kategori.detail', ['slug' => 'data-science-ai']) }}" class="mt-auto text-decoration-none fw-semibold small d-flex align-items-center gap-1 text-primary">
                    Lihat Lomba <span class="material-symbols-outlined fs-6">arrow_right_alt</span>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border border-secondary-subtle rounded-4 p-4 bg-white transition shadow-sm hover-shadow">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="p-3 rounded-4 text-info d-flex align-items-center justify-content-center" style="background-color: #ecfeff; width: 56px; height: 56px;">
                        <span class="material-symbols-outlined fs-2">palette</span>
                    </div>
                    <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle px-3 py-1 rounded-pill" style="font-size: 12px;">
                        0 Kompetisi
                    </span>
                </div>
                <h4 class="fw-bold mb-2 text-dark" style="font-size: 18px;">UI/UX Design</h4>
                <p class="text-muted small lh-relaxed mb-4">
                    Riset kebutuhan pengguna, buat *wireframe*, dan susun prototipe desain antarmuka aplikasi digital yang tidak hanya estetik secara visual namun juga intuitif saat digunakan.
                </p>
                <a href="{{ route('kategori.detail', ['slug' => 'ui-ux-design']) }}" class="mt-auto text-decoration-none fw-semibold small d-flex align-items-center gap-1 text-primary">
                    Lihat Lomba <span class="material-symbols-outlined fs-6">arrow_right_alt</span>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border border-secondary-subtle rounded-4 p-4 bg-white transition shadow-sm hover-shadow">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="p-3 rounded-4 text-purple d-flex align-items-center justify-content-center" style="background-color: #faf5ff; width: 56px; height: 56px; color: #a855f7;">
                        <span class="material-symbols-outlined fs-2">smartphone</span>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill" style="font-size: 12px;">
                        6 Kompetisi
                    </span>
                </div>
                <h4 class="fw-bold mb-2 text-dark" style="font-size: 18px;">Mobile Development</h4>
                <p class="text-muted small lh-relaxed mb-4">
                    Kembangkan aplikasi ponsel pintar (Android/iOS) yang kokoh, fungsional, dan memanfaatkan fitur perangkat keras lokal guna memberikan solusi portabel yang adaptif.
                </p>
                <a href="{{ route('kategori.detail', ['slug' => 'mobile-development']) }}" class="mt-auto text-decoration-none fw-semibold small d-flex align-items-center gap-1 text-primary">
                     Lihat Lomba <span class="material-symbols-outlined fs-6">arrow_right_alt</span>
                    </a>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05) !important;
        border-color: #0051d5 !important;
    }
    .transition {
        transition: all 0.3s ease;
    }
</style>
@endsection