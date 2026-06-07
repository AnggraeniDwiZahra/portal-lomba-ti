@extends('layouts.app')

@section('content')
<div class="container py-5" style="margin-top: 50px;">
    <div class="mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}" class="text-decoration-none">Kategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $namaKategori }}</li>
            </ol>
        </nav>
        <h2 class="fw-bold text-dark m-0">Kompetisi {{ $namaKategori }}</h2>
        <p class="text-muted small mt-1">Menampilkan kompetisi IT terbaik di bidang {{ $namaKategori }} sesuai kriteria yang kamu pilih.</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-3">
            <div class="card border border-secondary-subtle rounded-4 p-4 bg-white sticky-top" style="top: 110px; z-index: 10;">
                <div class="d-flex align-items-center gap-2 mb-4">
                    <span class="material-symbols-outlined text-primary">filter_list</span>
                    <h5 class="fw-bold m-0" style="font-size: 16px;">Filter Spesifik</h5>
                </div>

                <div class="mb-4">
                    <label class="fw-semibold text-dark d-block mb-2" style="font-size: 14px;">Status</label>
                    <div class="d-flex flex-column gap-2">
                        <div class="form-check d-flex align-items-center gap-2">
                            <input class="form-check-input mt-0" type="checkbox" id="open" checked>
                            <label class="form-check-label small text-muted d-flex align-items-center gap-1" for="open">
                                <span class="material-symbols-outlined text-success fs-6" style="font-variation-settings: 'FILL' 1;">fiber_manual_record</span> Opened
                            </label>
                        </div>
                        <div class="form-check d-flex align-items-center gap-2">
                            <input class="form-check-input mt-0" type="checkbox" id="upcoming">
                            <label class="form-check-label small text-muted d-flex align-items-center gap-1" for="upcoming">
                                <span class="material-symbols-outlined text-warning fs-6" style="font-variation-settings: 'FILL' 1;">fiber_manual_record</span> Upcoming
                            </label>
                        </div>
                        <div class="form-check d-flex align-items-center gap-2">
                            <input class="form-check-input mt-0" type="checkbox" id="closed">
                            <label class="form-check-label small text-muted d-flex align-items-center gap-1" for="closed">
                                <span class="material-symbols-outlined text-danger fs-6" style="font-variation-settings: 'FILL' 1;">fiber_manual_record</span> Closed
                            </label>
                        </div>
                    </div>
                </div>

                <hr class="text-muted opacity-25 my-3">

                <div class="mb-4">
                    <label class="fw-semibold text-dark d-block mb-2" style="font-size: 14px;">Tingkat Wilayah</label>
                    <div class="d-flex flex-column gap-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="regional">
                            <label class="form-check-label small text-muted" for="regional">Regional</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="nasional" checked>
                            <label class="form-check-label small text-muted" for="nasional">Nasional</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="internasional">
                            <label class="form-check-label small text-muted" for="internasional">Internasional</label>
                        </div>
                    </div>
                </div>

                <hr class="text-muted opacity-25 my-3">

                <div class="mb-4">
                    <label class="fw-semibold text-dark d-block mb-2" style="font-size: 14px;">Jenjang Pendidikan</label>
                    <div class="d-flex flex-column gap-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="mahasiswa" checked>
                            <label class="form-check-label small text-muted" for="mahasiswa">Mahasiswa (D3/D4/S1)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="siswa">
                            <label class="form-check-label small text-muted" for="siswa">Siswa SMA/SMK Sederajat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="umum">
                            <label class="form-check-label small text-muted" for="umum">Umum / Profesional</label>
                        </div>
                    </div>
                </div>

                <hr class="text-muted opacity-25 my-3">

                <div class="mb-4">
                    <label class="fw-semibold text-dark d-block mb-2" style="font-size: 14px;">Pelaksanaan</label>
                    <div class="d-flex flex-column gap-2">
                        <div class="form-check d-flex align-items-center gap-2">
                            <input class="form-check-input mt-0" type="checkbox" id="online" checked>
                            <label class="form-check-label small text-muted d-flex align-items-center gap-1" for="online">
                                <span class="material-symbols-outlined text-secondary fs-5">language</span> Online (Daring)
                            </label>
                        </div>
                        <div class="form-check d-flex align-items-center gap-2">
                            <input class="form-check-input mt-0" type="checkbox" id="offline">
                            <label class="form-check-label small text-muted d-flex align-items-center gap-1" for="offline">
                                <span class="material-symbols-outlined text-secondary fs-5">corporate_fare</span> Offline (Luring)
                            </label>
                        </div>
                    </div>
                </div>

                <hr class="text-muted opacity-25 my-3">

                <div class="mb-2">
                    <label class="fw-semibold text-dark d-block mb-2" style="font-size: 14px;">Total Hadiah</label>
                    <select class="form-select form-select-sm text-muted rounded-3" id="filterPrize">
                        <option value="all" selected>Semua Jumlah</option>
                        <option value="high">> Rp 10.000.000</option>
                        <option value="medium">Rp 2.000.000 - Rp 10.000.000</option>
                        <option value="free">Gratis / Piagam Saja</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="row g-4">
                
                <div class="col-md-6 col-lg-6">
                    <div class="card h-100 border border-secondary-subtle rounded-4 overflow-hidden bg-white shadow-sm">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600&q=80" class="w-100" style="height: 180px; object-fit: cover;" alt="Lomba">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill" style="font-size: 11px;">Opened</span>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1" style="font-size: 11px;">Nasional</span>
                                <small class="text-muted ms-2">• {{ $namaKategori }}</small>
                            </div>
                            <h5 class="fw-bold text-dark lh-base mb-3" style="font-size: 16px;">
                                <a href="{{ route('lomba.detail', ['id' => 1]) }}" class="text-decoration-none text-dark hover-primary">{{ $namaKategori }} Grand Championship 2026</a>
                            </h5>
                            <p class="text-muted small mb-4 lh-relaxed">Kompetisi bergengsi tingkat nasional yang menantang para talenta muda untuk menunjukkan skill terbaiknya di bidang {{ $namaKategori }}.</p>
                            
                            <div class="mt-auto pt-3 border-top border-light-subtle">
                                <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 12px;">
                                    <span class="d-flex align-items-center gap-1">
                                        <span class="material-symbols-outlined text-secondary" style="font-size: 16px;">school</span> Jenjang: <b class="text-dark">Mahasiswa</b>
                                    </span>
                                    <span class="d-flex align-items-center gap-1">
                                        <span class="material-symbols-outlined text-success" style="font-size: 16px;">payments</span> Prize: <b class="text-success">Rp 15 Juta</b>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between text-muted" style="font-size: 12px;">
                                    <span class="d-flex align-items-center gap-1">
                                        <span class="material-symbols-outlined text-secondary" style="font-size: 16px;">public</span> Pelaksanaan: <b class="text-dark">Online</b>
                                    </span>
                                    <span class="d-flex align-items-center gap-1">
                                        <span class="material-symbols-outlined text-danger" style="font-size: 16px;">calendar_month</span> Deadline: <b class="text-danger">15 Okt 2026</b>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="card h-100 border border-secondary-subtle rounded-4 overflow-hidden bg-white shadow-sm">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" class="w-100" style="height: 180px; object-fit: cover;" alt="Lomba">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill" style="font-size: 11px;">Opened</span>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1" style="font-size: 11px;">Nasional</span>
                                <small class="text-muted ms-2">• {{ $namaKategori }}</small>
                            </div>
                            <h5 class="fw-bold text-dark lh-base mb-3" style="font-size: 16px;">
                                <a href="{{ route('lomba.detail', ['id' => 2]) }}" class="text-decoration-none text-dark hover-primary">National {{ $namaKategori }} Hackathon Innovation</a>
                            </h5>
                            <p class="text-muted small mb-4 lh-relaxed">Bawa ide inovatif timmu menjadi kenyataan dan menangkan piala bergilir serta pendanaan proyek inkubasi.</p>
                            
                            <div class="mt-auto pt-3 border-top border-light-subtle">
                                <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 12px;">
                                    <span class="d-flex align-items-center gap-1">
                                        <span class="material-symbols-outlined text-secondary" style="font-size: 16px;">school</span> Jenjang: <b class="text-dark">Mahasiswa</b>
                                    </span>
                                    <span class="d-flex align-items-center gap-1">
                                        <span class="material-symbols-outlined text-success" style="font-size: 16px;">payments</span> Prize: <b class="text-success">Rp 25 Juta</b>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between text-muted" style="font-size: 12px;">
                                    <span class="d-flex align-items-center gap-1">
                                        <span class="material-symbols-outlined text-secondary" style="font-size: 16px;">public</span> Pelaksanaan: <b class="text-dark">Online</b>
                                    </span>
                                    <span class="d-flex align-items-center gap-1">
                                        <span class="material-symbols-outlined text-danger" style="font-size: 16px;">calendar_month</span> Deadline: <b class="text-danger">30 Nov 2026</b>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection