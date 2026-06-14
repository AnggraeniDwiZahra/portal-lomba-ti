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
    @foreach($categories as $category)
    <div class="col-md-6 col-lg-4">
        <div class="card h-100 border border-secondary-subtle rounded-4 p-4 bg-white transition shadow-sm hover-shadow">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="p-3 rounded-4 text-primary d-flex align-items-center justify-content-center" style="background-color: #f0f5ff; width: 56px; height: 56px;">
                    <span class="material-symbols-outlined fs-2">category</span>
                </div>
                
                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill" style="font-size: 12px;">
                    {{ $category->competitions->count() }} Kompetisi
                </span>
            </div>
            
            <h4 class="fw-bold mb-2 text-dark" style="font-size: 18px;">{{ $category->name }}</h4>
            <p class="text-muted small lh-relaxed mb-4">
                Temukan berbagai kompetisi menarik di bidang {{ $category->name }}.
            </p>
            <a href="{{ route('kategori.detail', ['id' => $category->id, 'slug' => Str::slug($category->name)]) }}" class="mt-auto text-decoration-none fw-semibold small d-flex align-items-center gap-1 text-primary">
                Lihat Lomba <span class="material-symbols-outlined fs-6">arrow_right_alt</span>
            </a>
        </div>
    </div>
    @endforeach
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