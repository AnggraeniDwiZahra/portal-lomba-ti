@extends('layouts.app')

@php
    // Tangkap ID dari URL, default ke 3 (Algorithmic Sprint) jika kosong
    $id = request()->get('id', 3); 

    // Set Data Konten secara Manual berdasarkan ID
    if($id == 1) {
        $title = "Capture The Flag: HackQuest 2026 University Edition";
        $penyelenggara = "ITB Cyber Group";
        $kategori = "Cyber Security";
        $cakupan = "Nasional";
        $img = "https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1200&q=80";
        $biaya = "Rp 50.000 / Tim";
        $deadline = "12 Oktober 2026";
        $tipeTim = "Tim (Maks. 3 Orang)";
        $hadiah1 = "Rp 10.000.000"; $hadiah2 = "Rp 7.500.000"; $hadiah3 = "Rp 5.000.000";
        $deskripsi = "HackQuest 2026 adalah kompetisi Capture The Flag (CTF) gaya Jeopardy yang menguji keahlian mahasiswa dalam mengeksploitasi celah keamanan siber, reverse engineering, kriptografi, forensic digital, dan web penetration testing. Siapkan tim terbaikmu untuk mengamankan takhta tertinggi peretas etis!";
        
        $timeline1 = "1 Agustus – 10 Oktober 2026";
        $timeline2 = "12 Oktober 2026";
        $timeline3 = "18 Oktober 2026";
        $timeline4 = "25 Oktober 2026";
    } elseif($id == 2) {
        $title = "DataViz Global Challenge: Predicting Cities";
        $penyelenggara = "Google Devs";
        $kategori = "Data Science";
        $cakupan = "Internasional";
        $img = "https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80";
        $biaya = "Gratis (Free Entry)";
        $deadline = "25 September 2026";
        $tipeTim = "Individu / Tim (Maks. 2 Orang)";
        $hadiah1 = "$2,500 USD"; $hadiah2 = "$1,500 USD"; $hadiah3 = "$1,000 USD";
        $deskripsi = "Tantang dirimu mengolah big data perkotaan dunia di DataViz Global Challenge 2026! Bangun model prediksi cerdas berbasis Machine Learning untuk memproyeksikan pertumbuhan populasi, tata ruang, dan kebutuhan energi masa depan. Menangkan pendanaan riset global langsung dari Google.";
        
        $timeline1 = "1 Juli – 20 September 2026";
        $timeline2 = "25 September 2026";
        $timeline3 = "5 Oktober 2026";
        $timeline4 = "15 Oktober 2026";
    } else {
        $title = "Algorithmic Sprint 2026: Problem Solving Marathon";
        $penyelenggara = "Compfest UI";
        $kategori = "Competitive Programming";
        $cakupan = "Regional";
        $img = "https://images.unsplash.com/photo-1542831371-29b0f74f9713?auto=format&fit=crop&w=1200&q=80";
        $biaya = "Gratis (Free Entry)";
        $deadline = "30 November 2026";
        $tipeTim = "Tim (Maks. 3 Orang)";
        $hadiah1 = "Rp 15.000.000"; $hadiah2 = "Rp 10.000.000"; $hadiah3 = "Rp 5.000.000";
        $deskripsi = "Algorithmic Sprint 2026 adalah ajang kompetisi pemrograman intensif berskala regional yang dirancang khusus untuk menguji kecepatan berpikir, efisiensi logika, dan kemampuan pemecahan masalah (problem-solving) mahasiswa IT. Peserta akan ditantang menyelesaikan persoalan struktur data kompleks.";
        
        $timeline1 = "1 Oktober – 30 November 2026";
        $timeline2 = "5 Desember 2026";
        $timeline3 = "12 Desember 2026";
        $timeline4 = "20 Desember 2026";
    }
@endphp

@section('title', $title . ' - Detail Lomba TI')

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
    .timeline-item {
        position: relative;
        padding-left: 24px;
        border-left: 2px solid #e2e8f0;
        padding-bottom: 16px;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -7px;
        top: 4px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #0051d5;
    }
    .timeline-item.active::before {
        background-color: #0051d5;
        box-shadow: 0 0 0 4px rgba(49, 107, 243, 0.2);
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
                        <span class="badge bg-primary px-3 py-2" style="border-radius: 30px;">{{ $cakupan }}</span>
                        <span class="badge bg-light text-dark px-3 py-2" style="border-radius: 30px;">{{ $kategori }}</span>
                    </div>
                    <h1 class="fw-bold display-6 mb-3">{{ $title }}</h1>
                    <p class="lead text-white-50 fs-6 mb-0">Diselenggarakan oleh <span class="text-white fw-semibold">{{ $penyelenggara }}</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="img-detail-container mb-4 shadow-sm">
                    <img src="{{ $img }}" alt="{{ $kategori }} Detail">
                </div>

                <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px;">
                    <h4 class="fw-bold mb-3">Deskripsi Kompetisi</h4>
                    <p class="text-muted lh-lg mb-0">{{ $deskripsi }}</p>
                </div>

                <div class="card border-0 shadow-sm p-4" style="border-radius: 16px;">
                    <h4 class="fw-bold mb-4">Hadiah & Benefit</h4>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <div class="p-3 bg-light rounded-3 text-center border">
                                <span class="material-symbols-outlined text-warning mb-2" style="font-size: 36px;">emoji_events</span>
                                <h6 class="fw-bold mb-1">Juara 1</h6>
                                <p class="text-primary fw-bold m-0">{{ $hadiah1 }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 bg-light rounded-3 text-center border">
                                <span class="material-symbols-outlined text-secondary mb-2" style="font-size: 36px;">card_membership</span>
                                <h6 class="fw-bold mb-1">Juara 2</h6>
                                <p class="text-primary fw-bold m-0">{{ $hadiah2 }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 bg-light rounded-3 text-center border">
                                <span class="material-symbols-outlined text-danger mb-2" style="font-size: 36px;">workspace_premium</span>
                                <h6 class="fw-bold mb-1">Juara 3</h6>
                                <p class="text-primary fw-bold m-0">{{ $hadiah3 }}</p>
                            </div>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3">Persyaratan Peserta</h5>
                    <ul class="text-muted lh-lg ps-3 mb-0">
                        <li>Mahasiswa aktif (D3/D4/S1) dibuktikan dengan Kartu Tanda Mahasiswa (KTM).</li>
                        <li>Ketentuan formasi anggota disesuaikan dengan syarat kategori {{ $kategori }}.</li>
                        <li>Mengikuti seluruh rangkaian simulasi dan babak kompetisi sesuai timeline resmi.</li>
                        <li>Keputusan dewan juri mutlak dan tidak dapat diganggu gugat.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-sidebar">
                    <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px;">
                        <div class="info-row">
                            <span class="material-symbols-outlined text-primary">payments</span>
                            <div>
                                <small class="text-muted d-block">Biaya Pendaftaran</small>
                                <span class="fw-bold text-dark">{{ $biaya }}</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <span class="material-symbols-outlined text-danger">event_busy</span>
                            <div>
                                <small class="text-muted d-block">Batas Pendaftaran</small>
                                <span class="fw-bold text-danger">{{ $deadline }}</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <span class="material-symbols-outlined text-success">group</span>
                            <div>
                                <small class="text-muted d-block">Tipe Tim</small>
                                <span class="fw-bold text-dark">{{ $tipeTim }}</span>
                            </div>
                        </div>

                        <div class="mt-4 gap-2 d-flex flex-column">
                            <a href="#" class="btn btn-primary-custom text-white text-center py-3 fw-bold text-decoration-none" style="border-radius: 12px;">
                                <span class="material-symbols-outlined me-1">rocket_launch</span> Daftar Kompetisi
                            </a>
                            <a href="#" class="btn btn-outline-secondary text-center py-2.5 fw-semibold" style="border-radius: 12px;">
                                <span class="material-symbols-outlined me-1">download</span> Unduh Guidebook
                            </a>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm p-4" style="border-radius: 16px;">
                        <h5 class="fw-bold mb-4">Alur Kegiatan</h5>
                        <div class="timeline-container">
                            <div class="timeline-item active">
                                <h6 class="fw-bold mb-1">Pendaftaran Terbuka</h6>
                                <small class="text-muted">{{ $timeline1 }}</small>
                            </div>
                            <div class="timeline-item">
                                <h6 class="fw-bold mb-1">Babak Penyisihan / Seleksi</h6>
                                <small class="text-muted">{{ $timeline2 }}</small>
                            </div>
                            <div class="timeline-item">
                                <h6 class="fw-bold mb-1">Pengumuman Finalis</h6>
                                <small class="text-muted">{{ $timeline3 }}</small>
                            </div>
                            <div class="timeline-item" style="padding-bottom: 0;">
                                <h6 class="fw-bold mb-1">Babak Final & Awarding</h6>
                                <small class="text-muted">{{ $timeline4 }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection