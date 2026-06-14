@extends('layouts.app')

@section('title', $lomba->title . ' - Detail Lomba TI')

@push('styles')
<style>
    .lomba-header-bg {
        background: linear-gradient(135deg, #213145 0%, #0f172a 100%);
        color: #fff;
    }
    .img-detail-container {
        width: 100%;
        max-height: 400px;
        background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
        border-radius: 16px;
        overflow: hidden;
    }
    .img-detail-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .sticky-sidebar {
        position: sticky;
        top: 100px;
    }
    .info-row {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    .info-row:last-child {
        border-bottom: none;
    }
</style>
@endpush

@section('content')
    <div class="lomba-header-bg py-5 mb-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-3">
                    <li class="breadcrumb-item"><a href="/" class="text-white-50 text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('lomba.index') }}" class="text-white-50 text-decoration-none">Lomba</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Detail</li>
                </ol>
            </nav>
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        {{-- Mengambil data level/cakupan dari relasi model level --}}
                        <span class="badge bg-primary px-3 py-2" style="border-radius: 30px;">{{ $lomba->level->name ?? 'Nasional' }}</span>
                        {{-- Mengambil data kategori dari relasi model category --}}
                        <span class="badge bg-light text-dark px-3 py-2" style="border-radius: 30px;">{{ $lomba->category->name ?? 'Kategori' }}</span>
                    </div>
                    <h1 class="fw-bold display-6 mb-3">{{ $lomba->title }}</h1>
                    <p class="lead text-white-50 fs-6 mb-0">Diposting oleh <span class="text-white fw-semibold">{{ $lomba->user->name ?? 'Admin' }}</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="img-detail-container mb-4 shadow-sm">
                    {{-- Cek jika ada file poster, jika tidak tampilkan placeholder --}}
                    <img src="{{ $lomba->poster ? asset('storage/' . $lomba->poster) : 'https://images.unsplash.com/photo-1542831371-29b0f74f9713?auto=format&fit=crop&w=1200&q=80' }}" alt="{{ $lomba->title }} Poster">
                </div>

                <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px;">
                    <h4 class="fw-bold mb-3">Deskripsi Kompetisi</h4>
                    <p class="text-muted lh-lg mb-0" style="white-space: pre-line;">{{ $lomba->description }}</p>
                </div>

                <div class="card border-0 shadow-sm p-4" style="border-radius: 16px;">
                    <h5 class="fw-bold mb-3">Persyaratan Umum</h5>
                    <ul class="text-muted lh-lg ps-3 mb-0">
                        <li>Mahasiswa aktif dibuktikan dengan Kartu Tanda Mahasiswa (KTM) yang valid.</li>
                        <li>Mengikuti seluruh rangkaian regulasi kompetisi yang telah ditetapkan pihak penyelenggara.</li>
                        <li>Pendaftaran dilakukan secara online melalui tautan resmi pendaftaran sebelum batas tenggat waktu.</li>
                        <li>Keputusan juri bersifat mutlak dan tidak dapat diganggu gugat.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-sidebar">
                    <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px;">
                        <div class="info-row">
                            <span class="material-symbols-outlined text-danger">event_busy</span>
                            <div>
                                <small class="text-muted d-block">Batas Pendaftaran</small>
                                <span class="fw-bold text-danger">
                                    {{ \Carbon\Carbon::parse($lomba->deadline)->format('d F Y') }}
                                </span>
                            </div>
                        </div>
                        <div class="info-row">
                            <span class="material-symbols-outlined text-primary">category</span>
                            <div>
                                <small class="text-muted d-block">Kategori Bidang</small>
                                <span class="fw-bold text-dark">{{ $lomba->category->name ?? '-' }}</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <span class="material-symbols-outlined text-success">public</span>
                            <div>
                                <small class="text-muted d-block">Tingkat Kompetisi</small>
                                <span class="fw-bold text-dark">{{ $lomba->level->name ?? '-' }}</span>
                            </div>
                        </div>

                        <div class="mt-4 gap-2 d-flex flex-column">
                            {{-- Menggunakan link pendaftaran dari seeder --}}
                            <a href="{{ $lomba->registration_link }}" target="_blank" class="btn btn-primary text-white text-center py-3 fw-bold text-decoration-none" style="border-radius: 12px; background-color: #0051d5; border: none;">
                                <span class="material-symbols-outlined me-1">rocket_launch</span> Daftar Kompetisi
                            </a>
                            
                            {{-- Fitur Simpan Kompetisi (Tetap Berfungsi Sempurna) --}}
                            @auth
                                <form action="{{ route('peserta.lomba.toggle', $lomba->id) }}" method="POST" class="m-0">
                                    @csrf
                                    @if(Auth::user()->savedCompetitions->contains($lomba->id))
                                        <button type="submit" class="btn btn-danger w-100 text-center py-2.5 fw-semibold d-flex align-items-center justify-content-center gap-2" style="border-radius: 12px;">
                                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">bookmark_remove</span> 
                                            Batal Simpan
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-outline-primary w-100 text-center py-2.5 fw-semibold d-flex align-items-center justify-content-center gap-2" style="border-radius: 12px;">
                                            <span class="material-symbols-outlined">bookmark</span> 
                                            Simpan Lomba
                                        </button>
                                    @endif
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection