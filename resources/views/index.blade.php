@extends('layouts.app')

@section('title', 'Portal Lomba TI - Pusat Informasi Lomba TI Terlengkap')

@push('styles')
<style>
    .hero-section {
        background: linear-gradient(180deg, rgba(49, 107, 243, 0.05) 0%, transparent 100%);
    }
    .badge-custom {
        background-color: rgba(49, 107, 243, 0.1);
        color: #0051d5;
        font-weight: 600;
        padding: 6px 16px;
        border-radius: 50px;
        border: 1px solid rgba(49, 107, 243, 0.15);
    }
    .avatar-group img {
        width: 40px;
        height: 40px;
        border-radius: 50px;
        border: 2px solid #fff;
        object-fit: cover;
        margin-right: -12px;
    }
    .glass-card {
        backdrop-filter: blur(8px);
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 16px;
    }
    .btn-outline-category {
        background: #fff;
        border: 1px solid #c6c6cd;
        color: #45464d;
        border-radius: 12px;
        padding: 10px 20px;
        font-weight: 500;
        transition: all 0.2s ease;
    }
    .btn-outline-category:hover {
        border-color: #0051d5;
        color: #0051d5;
    }
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
        background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
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
        width: auto
    }
    .cta-banner {
        background-color: #213145;
        border-radius: 24px;
        color: #eaf1ff;
    }
    .placeholder-img {
        background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
    }
    .btn-primary-custom {
        background-color: #0051d5;
        color: #fff;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.2s ease;
    }
    .btn-primary-custom:hover {
        background-color: #003ea8;
        color: #fff;
    }
</style>
@endpush

@section('content')
    <section class="hero-section py-5">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="d-inline-flex align-items-center gap-2 badge-custom mb-4">
                        <span class="material-symbols-outlined" style="font-size: 18px;">verified</span>
                        <span class="text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">Pusat Kompetisi Mahasiswa</span>
                    </div>
                    <h1 class="display-5 fw-bold lh-sm mb-3">
                        Tunjukkan Skill-mu di <br><span style="color: #0051d5;">Arena Kompetisi</span> Digital
                    </h1>
                    <p class="lead text-muted mb-4 fs-6">
                        Temukan ratusan kompetisi IT bertaraf nasional dan internasional. Persiapkan dirimu untuk menjadi juara di bidang Siber, Web, Mobile, dan Competitive Programming.
                    </p>
                    
                    <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start align-items-center gap-4 pt-2">
                        <a href="{{ route('lomba.index') }}" class="btn btn-primary-custom d-flex align-items-center gap-2 text-decoration-none">
                            Eksplor Sekarang
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                        
                        <div class="d-flex align-items-center gap-2">
                            <div class="avatar-group d-flex">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="User 1">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="User 2">
                            </div>
                            <div class="ms-3 text-start">
                                <h6 class="mb-0 fw-bold">1.2k+</h6>
                                <small class="text-muted">Peserta Aktif</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="position-relative mx-auto" style="max-width: 500px;">
                        <div class="card border-0 shadow-lg overflow-hidden ratio ratio-4x3 placeholder-img" style="border-radius: 24px;">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=800&q=80" class="object-fit-cover" alt="Cyber Workspace">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 p-md-4">
                                <div class="glass-card p-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <small class="text-primary fw-bold text-uppercase" style="font-size: 11px;">Kompetisi Utama</small>
                                        <h6 class="mb-0 fw-bold mt-1">Indonesian Cyber Summit 2026</h6>
                                    </div>
                                    <div class="text-end">
                                        <small class="text-muted d-block" style="font-size: 11px;">Prize Pool</small>
                                        <span class="fw-bold text-primary">Rp 50jt</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                <span class="material-symbols-outlined text-primary">category</span>
                Cari Berdasarkan Kategori
            </h5>
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('lomba.index') }}" class="btn btn-primary-custom px-4 text-decoration-none">Semua Lomba</a>
                <button class="btn btn-outline-category d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined fs-5">security</span> Siber
                </button>
                <button class="btn btn-outline-category d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined fs-5">terminal</span> Competitive Programming
                </button>
                <button class="btn btn-outline-category d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined fs-5">language</span> Web Development
                </button>
                <button class="btn btn-outline-secondary rounded-pill px-4 py-2 text-muted d-flex align-items-center gap-2" style="font-size: 14px;">
                    <span class="material-symbols-outlined fs-5">monitoring</span> Data Science
                </button>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <small class="text-primary fw-bold text-uppercase">Aktif Sekarang</small>
                    <h2 class="fw-bold m-0 mt-1">Kompetisi Pilihan</h2>
                </div>
                <a href="{{ route('lomba.index') }}" class="text-decoration-none fw-semibold d-flex align-items-center gap-1">
                    Lihat Semua <span class="material-symbols-outlined">chevron_right</span>
                </a>
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
                                <span class="fw-bold">Sisa 5 Hari</span>
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
                                <div class="col-flex d-flex justify-content-between align-items-center">
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

            <div class="cta-banner p-4 p-md-5 mt-5 shadow">
                <div class="container-fluid py-2">
                    <div class="row align-items-center">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h2 class="fw-bold mb-2 text-white">Punya Info Lomba Menarik?</h2>
                            <p class="text-white-50 mb-4 mb-lg-0">Bantu teman-teman mahasiswa lainnya menemukan peluang prestasi. Publikasikan info lombamu di sini secara gratis!</p>
                        </div>
                        <div class="col-lg-4 text-center text-lg-end">
                            <button class="btn btn-light fw-semibold text-dark px-4 py-2" style="border-radius: 12px;">Posting Lomba Baru</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection