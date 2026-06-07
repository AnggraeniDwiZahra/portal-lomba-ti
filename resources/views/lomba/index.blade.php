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
        <div class="col-md-6">
            <div class="position-relative" style="max-width: 400px; margin-left: auto;">
                <span class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y ms-3 text-muted" style="font-size: 20px;">search</span>
                <input type="text" class="form-control ps-5 rounded-3 border-secondary-subtle py-2" placeholder="Cari kompetisi...">
            </div>
        </div>
    </div>

    
    <div class="d-flex flex-wrap gap-2 mb-5">
        <button class="btn btn-outline-secondary rounded-pill px-4 py-2 btn-category-active" style="font-size: 14px;">Semua Lomba</button>
        <button class="btn btn-outline-secondary rounded-pill px-4 py-2 text-muted d-flex align-items-center gap-2" style="font-size: 14px; background: #main-bg;">
            <span class="material-symbols-outlined fs-5">security</span> Siber
        </button>
        <button class="btn btn-outline-secondary rounded-pill px-4 py-2 text-muted d-flex align-items-center gap-2" style="font-size: 14px;">
            <span class="material-symbols-outlined fs-5">terminal</span> Competitive Programming
        </button>
        <button class="btn btn-outline-secondary rounded-pill px-4 py-2 text-muted d-flex align-items-center gap-2" style="font-size: 14px;">
            <span class="material-symbols-outlined fs-5">language</span> Web Development
        </button>
        <button class="btn btn-outline-secondary rounded-pill px-4 py-2 text-muted d-flex align-items-center gap-2" style="font-size: 14px;">
            <span class="material-symbols-outlined fs-5">monitoring</span> Data Science
        </button>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 lomba-card overflow-hidden">
                <div class="img-container">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=500&q=80" alt="Cyber Security">
                    <div class="card-badge text-success">
                        <span class="spinner-grow spinner-grow-sm text-success" style="width: 6px; height: 6px; margin-right: 4px;"></span>
                        <span>Opened</span>
                    </div>
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="mb-2">
                        <span class="badge bg-light text-primary border border-primary-subtle px-2 py-1" style="font-size: 11px;">Nasional</span>
                        <small class="text-muted ms-2">• Cyber Security</small>
                    </div>
                    <h5 class="card-title fw-bold lh-base mb-4" style="font-size: 16px;">
                        <a href="{{ route('lomba.detail', ['id' => 1]) }}" class="text-decoration-none text-dark hover-primary">Capture The Flag: HackQuest 2026 University Edition</a>
                    </h5>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted d-flex align-items-center gap-1" style="font-size: 12px;">
                                <span class="material-symbols-outlined fs-6">event</span> Deadline:
                            </small>
                            <span class="fw-bold text-danger" style="font-size: 13px;">12 Okt 2026</span>
                        </div>
                        <hr class="text-muted opacity-25 my-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted" style="font-size: 12px;">Oleh <span class="fw-semibold text-dark">ITB Cyber Group</span></small>
                            <button class="btn btn-outline-primary rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <span class="material-symbols-outlined" style="font-size: 18px;">bookmark</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 lomba-card overflow-hidden">
                <div class="img-container">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=500&q=80" alt="Data Science">
                    <div class="card-badge text-primary">
                        <span>Sisa 5 Hari</span>
                    </div>
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="mb-2">
                        <span class="badge bg-light text-primary border border-primary-subtle px-2 py-1" style="font-size: 11px;">Internasional</span>
                        <small class="text-muted ms-2">• Data Science</small>
                    </div>
                    <h5 class="card-title fw-bold lh-base mb-4" style="font-size: 16px;">
                        <a href="{{ route('lomba.detail', ['id' => 2]) }}" class="text-decoration-none text-dark hover-primary">DataViz Global Challenge: Predicting Cities</a>
                    </h5>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted d-flex align-items-center gap-1" style="font-size: 12px;">
                                <span class="material-symbols-outlined fs-6">event</span> Deadline:
                            </small>
                            <span class="fw-bold text-danger" style="font-size: 13px;">25 Sep 2026</span>
                        </div>
                        <hr class="text-muted opacity-25 my-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted" style="font-size: 12px;">Oleh <span class="fw-semibold text-dark">Google Devs</span></small>
                            <button class="btn btn-outline-primary rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <span class="material-symbols-outlined" style="font-size: 18px;">bookmark</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 lomba-card overflow-hidden">
                <div class="img-container">
                    <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?auto=format&fit=crop&w=500&q=80" alt="Competitive Programming">
                    <div class="card-badge text-success">
                        <span class="spinner-grow spinner-grow-sm text-success" style="width: 6px; height: 6px; margin-right: 4px;"></span>
                        <span>Opened</span>
                    </div>
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="mb-2">
                        <span class="badge bg-light text-primary border border-primary-subtle px-2 py-1" style="font-size: 11px;">Regional</span>
                        <small class="text-muted ms-2">• Comp. Programming</small>
                    </div>
                    <h5 class="card-title fw-bold lh-base mb-4" style="font-size: 16px;">
                        <a href="{{ route('lomba.detail', ['id' => 3]) }}" class="text-decoration-none text-dark hover-primary">Algorithmic Sprint 2026: Problem Solving Marathon</a>
                    </h5>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted d-flex align-items-center gap-1" style="font-size: 12px;">
                                <span class="material-symbols-outlined fs-6">event</span> Deadline:
                            </small>
                            <span class="fw-bold text-danger" style="font-size: 13px;">30 Nov 2026</span>
                        </div>
                        <hr class="text-muted opacity-25 my-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted" style="font-size: 12px;">Oleh <span class="fw-semibold text-dark">Compfest UI</span></small>
                            <button class="btn btn-outline-primary rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <span class="material-symbols-outlined" style="font-size: 18px;">bookmark</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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