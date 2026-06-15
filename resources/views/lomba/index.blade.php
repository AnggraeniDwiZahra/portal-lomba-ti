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
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(4px);
        padding: 4px 10px;
        border-radius: 30px;
        font-size: 11px;
        font-weight: 600;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        display: inline-flex;
        align-items: center;
        width: auto;
    }
    
    /* Tombol Kategori */
    .btn-category-active {
        background-color: #0051d5;
        color: #fff;
        border-color: #0051d5;
    }
    
    /* Hover link judul */
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
           class="btn {{ request('category_id') == $category->id ? 'btn-category-active' : 'btn-outline-secondary' }} rounded-pill px-4 py-2 d-flex align-items-center gap-2" 
           style="font-size: 14px;">
            <span class="material-symbols-outlined fs-5">category</span> 
            {{ $category->name }}
        </a>
        @endforeach
    </div>

    <div class="row g-4">
        @forelse($listLomba as $lomba)
        <div class="col-md-6 col-lg-4">
            <x-competition-card :lomba="$lomba" />
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <h4 class="text-muted">Belum ada lomba di kategori ini</h4>
        </div>
        @endforelse
    </div>
</div>
@endsection