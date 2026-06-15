@extends('layouts.app')

@section('content')
<div class="container py-5" style="margin-top: 50px;">
    {{-- Header Section --}}
    <div class="mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}" class="text-decoration-none">Kategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
            </ol>
        </nav>
        <h2 class="fw-bold text-dark m-0">Kompetisi {{ $category->name }}</h2>
        <p class="text-muted small mt-1">Menampilkan kompetisi IT terbaik di bidang {{ $category->name }} sesuai kriteria yang kamu pilih.</p>
    </div>

    <div class="row g-4">
        {{-- Sidebar Filter --}}
        <div class="col-lg-3">
            <form action="{{ url()->current() }}" method="GET" id="filterForm">
                <div class="card border border-secondary-subtle rounded-4 p-4 bg-white sticky-top" style="top: 110px; z-index: 10;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-2">
                            <span class="material-symbols-outlined text-primary">filter_list</span>
                            <h5 class="fw-bold m-0" style="font-size: 16px;">Filter Spesifik</h5>
                        </div>
                        {{-- Tombol reset muncul jika ada filter aktif --}}
                        @if(request()->has('status') || request()->has('levels'))
                            <a href="{{ url()->current() }}" class="text-decoration-none small text-danger" style="font-size: 12px;">Reset</a>
                        @endif
                    </div>

                    {{-- Filter Status --}}
                    <div class="mb-4">
                        <label class="fw-semibold text-dark d-block mb-2" style="font-size: 14px;">Status Pendaftaran</label>
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input mt-0 filter-checkbox" type="radio" name="status" value="open" id="open" {{ request('status') == 'open' ? 'checked' : '' }}>
                                <label class="form-check-label small text-muted d-flex align-items-center gap-1" for="open">
                                    <span class="material-symbols-outlined text-success fs-6" style="font-variation-settings: 'FILL' 1;">fiber_manual_record</span> Opened
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input mt-0 filter-checkbox" type="radio" name="status" value="closed" id="closed" {{ request('status') == 'closed' ? 'checked' : '' }}>
                                <label class="form-check-label small text-muted d-flex align-items-center gap-1" for="closed">
                                    <span class="material-symbols-outlined text-danger fs-6" style="font-variation-settings: 'FILL' 1;">fiber_manual_record</span> Closed
                                </label>
                            </div>
                        </div>
                    </div>

                    <hr class="text-muted opacity-25 my-3">

                    {{-- Filter Tingkat Wilayah Sesuai LevelSeeder (Universitas, Nasional, Internasional) --}}
                    <div class="mb-2">
                        <label class="fw-semibold text-dark d-block mb-2" style="font-size: 14px;">Tingkat Wilayah</label>
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" name="levels[]" value="Universitas" id="lvl-universitas" {{ is_array(request('levels')) && in_array('Universitas', request('levels')) ? 'checked' : '' }}>
                                <label class="form-check-label small text-muted" for="lvl-universitas">Universitas</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" name="levels[]" value="Nasional" id="lvl-nasional" {{ is_array(request('levels')) && in_array('Nasional', request('levels')) ? 'checked' : '' }}>
                                <label class="form-check-label small text-muted" for="lvl-nasional">Nasional</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" name="levels[]" value="Internasional" id="lvl-internasional" {{ is_array(request('levels')) && in_array('Internasional', request('levels')) ? 'checked' : '' }}>
                                <label class="form-check-label small text-muted" for="lvl-internasional">Internasional</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- Section List Kompetisi / Lomba --}}
        <div class="col-lg-9">
            <div class="row g-4">
                
                @if($competitions->count() > 0)
                    @foreach($competitions as $lomba)
                        <div class="col-md-6 col-lg-6">
                            <x-competition-card :lomba="$lomba" />
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center py-5">
                        <span class="material-symbols-outlined text-muted display-1 mb-3">folder_open</span>
                        <h5 class="fw-bold text-secondary">Tidak Ada Kompetisi</h5>
                        <p class="text-muted small">Tidak ditemukan kompetisi aktif yang sesuai dengan kriteria filter saat ini.</p>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

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
    .hover-primary:hover {
        color: #0051d5 !important;
    }
</style>

{{-- Script Otomatis Submit Form saat Filter Diberi Centang --}}
<script>
    document.querySelectorAll('.filter-checkbox').forEach(element => {
        element.addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });
    });
</script>
@endsection