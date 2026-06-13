@extends('admin.layouts.app')

@section('title', 'Dashboard Overview - Portal Lomba TI')
@section('header_title', 'Dashboard Overview')
@section('header_subtitle', 'Pantau dan kelola data kompetisi IT yang aktif di platform.')

@section('content')
<div class="row g-4">
    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text-muted fw-semibold" style="font-size: 14px;">Total Kompetisi</span>
                <span class="material-symbols-outlined text-primary p-2 bg-primary-subtle rounded-3">event_note</span>
            </div>
            <h3 class="fw-bold mb-1" style="font-size: 28px; color: #0b1c30;">142</h3>
            <span class="text-muted small">Seluruh kompetisi terarsip</span>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text-muted fw-semibold" style="font-size: 14px;">Pendaftaran Aktif</span>
                <span class="material-symbols-outlined text-success p-2 bg-success-subtle rounded-3">cloud_done</span>
            </div>
            <h3 class="fw-bold mb-1" style="font-size: 28px; color: #0b1c30;">28</h3>
            <span class="text-success small fw-medium d-flex align-items-center gap-1">
                <span class="material-symbols-outlined fs-6">check_circle</span> Terbuka untuk mahasiswa
            </span>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #316bf3; color: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text-white-50 fw-semibold" style="font-size: 14px;">Tugas Menunggu</span>
                <span class="material-symbols-outlined text-white p-2 bg-white/20 rounded-3">pending_actions</span>
            </div>
            <h3 class="fw-bold mb-1" style="font-size: 28px;">12 Verifikasi Baru</h3>
            <span class="text-white-50 small">Persetujuan publikasi draf lomba</span>
        </div>
    </div>
</div>

<div class="row g-4 mt-2">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px; background-color: #ffffff;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold m-0" style="font-size: 18px; color: #0b1c30;">Pembaruan Kompetisi Terkini</h5>
                <a href="#" class="btn btn-light btn-sm text-primary fw-semibold px-3 rounded-2">Kelola Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-muted small">
                        <tr>
                            <th class="border-0 px-3 py-3">Nama Kompetisi</th>
                            <th class="border-0 py-3">Kategori</th>
                            <th class="border-0 py-3">Batas Waktu</th>
                            <th class="border-0 py-3 text-center">Status Kontrol</th>
                        </tr>
                    </thead>
                    <tbody class="small">
                        <tr>
                            <td class="px-3 py-3 fw-semibold">Algorithmic Sprint 2024 <span class="text-muted fw-normal d-block" style="font-size: 12px;">ID: COMP-001</span></td>
                            <td>Competitive Programming</td>
                            <td>15 Nov 2024</td>
                            <td class="text-center"><span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-semibold">Terbuka</span></td>
                        </tr>
                        <tr>
                            <td class="px-3 py-3 fw-semibold">UI/UX Design Master <span class="text-muted fw-normal d-block" style="font-size: 12px;">ID: COMP-002</span></td>
                            <td>Design UI/UX</td>
                            <td>02 Des 2024</td>
                            <td class="text-center"><span class="badge bg-warning-subtle text-warning px-3 py-2 rounded-pill fw-semibold">Draft</span></td>
                        </tr>
                        <tr>
                            <td class="px-3 py-3 fw-semibold">Cyber Guard CTF 2024 <span class="text-muted fw-normal d-block" style="font-size: 12px;">ID: COMP-003</span></td>
                            <td>Cyber Security</td>
                            <td>28 Okt 2024</td>
                            <td class="text-center"><span class="badge bg-secondary-subtle text-secondary px-3 py-2 rounded-pill fw-semibold">Tutup</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-4" style="font-size: 18px; color: #0b1c30;">Log Aktivitas Sistem</h5>
            
            <div class="d-flex gap-3 mb-3">
                <div class="mt-1 w-2 h-2 rounded-circle bg-primary shrink-0"></div>
                <div>
                    <p class="mb-0 small fw-semibold">Admin mengupdate 'Algorithmic Sprint'</p>
                    <small class="text-muted d-block" style="font-size: 11px;">2 jam yang lalu</small>
                </div>
            </div>

            <div class="d-flex gap-3 mb-3">
                <div class="mt-1 w-2 h-2 rounded-circle bg-success shrink-0"></div>
                <div>
                    <p class="mb-0 small fw-semibold">Kategori 'Cyber Security' ditambahkan</p>
                    <small class="text-muted d-block" style="font-size: 11px;">5 jam yang lalu</small>
                </div>
            </div>
        </div>
        
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-3" style="font-size: 16px; color: #0b1c30;">Kategori Terpopuler</h5>
            <div class="d-flex flex-wrap gap-2">
                <span class="badge bg-light text-dark border p-2">Web Development</span>
                <span class="badge bg-light text-dark border p-2">Data Science</span>
                <span class="badge bg-light text-dark border p-2">Siber</span>
            </div>
        </div>
    </div>
</div>
@endsection