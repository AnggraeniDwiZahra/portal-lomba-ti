@extends('layouts.app')

@section('content')
<div class="container py-5" style="margin-top: 50px; max-width: 900px;">
    <div class="text-center mb-5">
        <small class="text-primary fw-bold text-uppercase" style="letter-spacing: 1px;">Step by Step</small>
        <h1 class="fw-bold mt-2 mb-3">Panduan & Alur Pendaftaran</h1>
        <p class="text-muted mx-auto" style="max-width: 550px; font-size: 15px;">
            Masih bingung cara memulai berkompetisi? Ikuti alur sederhana di bawah ini dari proses memilih lomba hingga tahap pengiriman karya.
        </p>
    </div>

    <div class="position-relative py-4">
        <div class="position-absolute start-0 start-md-50 translate-middle-x bg-primary-subtle" style="width: 4px; top: 0; bottom: 0; left: 20px; opacity: 0.6;"></div>

        <div class="row g-4 mb-5 position-relative align-items-center">
            <div class="position-absolute start-0 start-md-50 translate-middle bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 44px; height: 44px; z-index: 2; left: 20px;">
                <span class="material-symbols-outlined fs-5">search</span>
            </div>
            <div class="col-md-6 order-2 order-md-1 text-md-end pe-md-5 ps-5 ps-md-0">
                <div class="card border border-secondary-subtle rounded-4 p-4 bg-white shadow-sm hover-line-right">
                    <span class="badge bg-primary-subtle text-primary mb-2 px-3 py-1 rounded-pill" style="font-size: 11px;">Langkah 01</span>
                    <h5 class="fw-bold text-dark">Eksplorasi & Pilih Lomba</h5>
                    <p class="text-muted small m-0 lh-relaxed">
                        Masuk ke menu <b>Lomba</b> atau <b>Kategori</b>, temukan kompetisi IT yang cocok dengan minat, keahlian, atau tingkat pendidikanmu saat ini.
                    </p>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 d-none d-md-block"></div>
        </div>

        <div class="row g-4 mb-5 position-relative align-items-center">
            <div class="position-absolute start-0 start-md-50 translate-middle bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 44px; height: 44px; z-index: 2; left: 20px;">
                <span class="material-symbols-outlined fs-5">description</span>
            </div>
            <div class="col-md-6 d-none d-md-block"></div>
            <div class="col-md-6 ps-5 ps-md-5">
                <div class="card border border-secondary-subtle rounded-4 p-4 bg-white shadow-sm hover-line-left">
                    <span class="badge bg-primary-subtle text-primary mb-2 px-3 py-1 rounded-pill" style="font-size: 11px;">Langkah 02</span>
                    <h5 class="fw-bold text-dark">Pahami Deskripsi & Aturan Lomba</h5>
                    <p class="text-muted small m-0 lh-relaxed">
                        Klik pada lomba yang kamu pilih untuk membuka halaman detailnya. Pelajari deskripsi kompetisi, persyaratan kriteria, batas waktu (*deadline*), serta tingkat wilayah yang ditentukan oleh penyelenggara.
                    </p>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5 position-relative align-items-center">
            <div class="position-absolute start-0 start-md-50 translate-middle bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 44px; height: 44px; z-index: 2; left: 20px;">
                <span class="material-symbols-outlined fs-5">group_add</span>
            </div>
            <div class="col-md-6 text-md-end pe-md-5 ps-5 ps-md-0">
                <div class="card border border-secondary-subtle rounded-4 p-4 bg-white shadow-sm hover-line-right">
                    <span class="badge bg-primary-subtle text-primary mb-2 px-3 py-1 rounded-pill" style="font-size: 11px;">Langkah 03</span>
                    <h5 class="fw-bold text-dark">Bentuk Tim & Siapkan Berkas</h5>
                    <p class="text-muted small m-0 lh-relaxed">
                        Ajak rekan kuliahmu untuk berkolaborasi jika lombanya berkelompok. Siapkan dokumen wajib seperti KTM (Kartu Tanda Mahasiswa), foto formal, atau surat pernyataan aktif kuliah.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block"></div>
        </div>

        <div class="row g-4 position-relative align-items-center">
            <div class="position-absolute start-0 start-md-50 translate-middle bg-success text-white rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 44px; height: 44px; z-index: 2; left: 20px;">
                <span class="material-symbols-outlined fs-5">how_to_reg</span>
            </div>
            <div class="col-md-6 d-none d-md-block"></div>
            <div class="col-md-6 ps-5 ps-md-5">
                <div class="card border border-secondary-subtle rounded-4 p-4 bg-white shadow-sm hover-line-left">
                    <span class="badge bg-success-subtle text-success mb-2 px-3 py-1 rounded-pill" style="font-size: 11px;">Langkah Terakhir</span>
                    <h5 class="fw-bold text-dark">Lakukan Pendaftaran Resmi</h5>
                    <p class="text-muted small mb-3 lh-relaxed">
                        Klik tombol <b>Daftar Sekarang</b> di halaman detail lomba untuk diarahkan langsung menuju tautan resmi (Google Form/Web Official) milik instansi penyelenggara.
                    </p>
                    <a href="{{ route('lomba.index') }}" class="btn btn-primary btn-sm px-4 rounded-3 text-white d-inline-flex align-items-center gap-1 w-auto align-self-start" style="background-color: #0051d5; border: none; font-size: 13px;">
                        Mulai Cari Lomba <span class="material-symbols-outlined fs-6">arrow_right_alt</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @media (min-width: 768px) {
        .hover-line-right:hover {
            border-right: 4px solid #0051d5 !important;
            transform: translateX(-3px);
        }
        .hover-line-left:hover {
            border-left: 4px solid #0051d5 !important;
            transform: translateX(3px);
        }
    }
    .card {
        transition: all 0.3s ease;
    }
</style>
@endsection