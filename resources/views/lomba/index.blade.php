@extends('layouts.app')

@section('title', 'Katalog Lomba - Portal Lomba TI')

@push('styles')
<style>
    .lomba-card {
        border: 1px solid rgba(198, 198, 205, 0.3);
        border-radius: 20px;
        background: #fff;
        transition: all 0.3s ease;
    }
    .lomba-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0,0,0,0.05);
    }
    .img-container {
        position: relative;
        width: 100%;
        height: 180px; 
        overflow: hidden;
    }
    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .card-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        z-index: 10;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(4px);
        padding: 4px 10px;
        border-radius: 30px;
        font-size: 11px;
        font-weight: 700;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        display: inline-flex;
        align-items: center;
    }
    .btn-category-active {
        background-color: #0051d5 !important;
        color: #fff !important;
        border-color: #0051d5 !important;
    }
    .hover-primary:hover {
        color: #0051d5 !important;
    }
</style>
@endpush

@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2 class="fw-bold text-dark mb-2">Jelajahi Semua Kompetisi</h2>
            <p class="text-muted mb-md-0">Saring dan temukan kompetisi TI terbaik untuk mengasah skill-mu.</p>
        </div>
    </div>

    <div class="d-flex flex-wrap gap-2 mb-5">
        <a href="{{ route('lomba.index') }}" 
            class="btn {{ !request('category_id') ? 'btn-category-active' : 'btn-outline-secondary' }} rounded-pill px-4 py-2" 
            style="font-size: 14px;">
            Semua Lomba
        </a>

    @foreach($categories as $category)
    <a href="{{ route('lomba.index', ['category_id' => $category->id]) }}" 
       class="btn {{ request('category_id') == $category->id ? 'btn-category-active' : 'btn-outline-secondary' }} rounded-pill px-4 py-2 text-muted d-flex align-items-center gap-2" 
       style="font-size: 14px;">
        
        <span class="material-symbols-outlined fs-5">category</span> 
        {{ $category->name }}
    </a>
    @endforeach
</div>

    <div class="row g-4">
    {{-- Kita ganti @foreach jadi @forelse --}}
    @forelse($listLomba as $lomba)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 lomba-card overflow-hidden">
                <div class="img-container">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=500&q=80" alt="{{ $lomba->title }}">
                </div>
                
                <div class="card-body d-flex flex-column p-4">
                    <div class="mb-2">
                        <span class="badge bg-light text-primary border border-primary-subtle px-2 py-1" style="font-size: 11px;">
                            Level ID: {{ $lomba->level_id }}
                        </span>
                    </div>
                    
                    <h5 class="card-title fw-bold lh-base mb-4" style="font-size: 16px;">
                        <a href="{{ route('lomba.detail', ['id' => $lomba->id]) }}" class="text-decoration-none text-dark hover-primary">
                            {{ $lomba->title }}
                        </a>
                    </h5>
                    
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted" style="font-size: 12px;">Deadline: {{ \Carbon\Carbon::parse($lomba->deadline)->format('d M Y') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        {{-- Ini bagian yang muncul kalau datanya kosong --}}
        <div class="col-12 text-center py-5">
            <h4 class="text-muted">Belum ada lomba di kategori ini</h4>
            <p class="text-muted">Coba pilih kategori lain atau lihat semua lomba.</p>
        </div>
    @endforelse
</div>

    <nav class="mt-5">
        <ul class="pagination justify-content-center gap-1">
            <li class="page-item disabled"><a class="page-link border-0 rounded-3 text-muted" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link border-0 rounded-3" href="#" style="background-color: #0051d5;">1</a></li>
            <li class="page-item"><a class="page-link border-0 rounded-3 text-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link border-0 rounded-3 text-dark" href="#">Next</a></li>
        </ul>
    </nav>
</div>
@endsection