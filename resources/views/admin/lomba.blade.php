@extends('admin.layouts.app')

@section('title', 'Kelola Lomba - Portal Lomba TI')
@section('header_title', 'Manajemen Lomba')
@section('header_subtitle', 'Kelola data kompetisi IT yang aktif dan mendatang di platform.')

@section('content')
<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3" style="border-radius: 12px; background-color: #ffffff;">
            <small class="text-muted fw-semibold d-block mb-1">Total Lomba</small>
            <h4 class="fw-bold m-0" style="color: #0b1c30;">142</h4>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3" style="border-radius: 12px; background-color: #ffffff;">
            <small class="text-muted fw-semibold d-block mb-1">Pendaftaran Aktif</small>
            <h4 class="fw-bold m-0 text-primary">28</h4>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3" style="border-radius: 12px; background-color: #316bf3; color: #white;">
            <small class="text-white-50 fw-semibold d-block mb-1">Butuh Verifikasi Berkas</small>
            <h4 class="fw-bold m-0 text-white">12 Baru</h4>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold m-0" style="font-size: 18px; color: #0b1c30;">Daftar Kompetisi</h5>
        <div class="dropdown">
            <button class="btn btn-light btn-sm dropdown-toggle fw-semibold rounded-2 px-3" type="button" data-bs-toggle="dropdown">
                <span class="material-symbols-outlined align-middle fs-6 me-1">filter_list</span> Filter Status
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item small" href="#">Semua</a></li>
                <li><a class="dropdown-item small" href="#">Terbuka</a></li>
                <li><a class="dropdown-item small" href="#">Draft</a></li>
                <li><a class="dropdown-item small" href="#">Tutup</a></li>
            </ul>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light text-muted small">
                <tr>
                    <th class="border-0 px-3 py-3">Nama Lomba</th>
                    <th class="border-0 py-3">Kategori</th>
                    <th class="border-0 py-3">Deadline</th>
                    <th class="border-0 py-3 text-center">Status</th>
                    <th class="border-0 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="small">
                <tr>
                    <td class="px-3 py-3 fw-semibold">
                        Algorithmic Sprint 2024
                        <span class="text-muted fw-normal d-block" style="font-size: 12px;">ID: COMP-001</span>
                    </td>
                    <td><span class="badge bg-primary-subtle text-primary rounded-2 px-2 py-1">Competitive Programming</span></td>
                    <td>
                        15 Nov 2024
                        <span class="text-danger fw-medium d-block" style="font-size: 11px;">12 Hari Lagi</span>
                    </td>
                    <td class="text-center"><span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-semibold">Terbuka</span></td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-sm btn-light text-primary p-2 d-inline-flex rounded-2"><span class="material-symbols-outlined fs-5">edit</span></a>
                            <button class="btn btn-sm btn-light text-danger p-2 d-inline-flex rounded-2"><span class="material-symbols-outlined fs-5">delete</span></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="px-3 py-3 fw-semibold">
                        UI/UX Design Master
                        <span class="text-muted fw-normal d-block" style="font-size: 12px;">ID: COMP-002</span>
                    </td>
                    <td><span class="badge bg-secondary-subtle text-secondary rounded-2 px-2 py-1">Design UI/UX</span></td>
                    <td>
                        02 Des 2024
                        <span class="text-muted d-block" style="font-size: 11px;">Coming Soon</span>
                    </td>
                    <td class="text-center"><span class="badge bg-warning-subtle text-warning px-3 py-2 rounded-pill fw-semibold">Draft</span></td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-sm btn-light text-primary p-2 d-inline-flex rounded-2"><span class="material-symbols-outlined fs-5">edit</span></a>
                            <button class="btn btn-sm btn-light text-danger p-2 d-inline-flex rounded-2"><span class="material-symbols-outlined fs-5">delete</span></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-4">
        <small class="text-muted">Menampilkan 1-2 dari 142 lomba</small>
        <nav>
            <ul class="pagination pagination-sm m-0">
                <li class="page-item disabled"><a class="page-item page-link rounded-start-2" href="#"><span class="material-symbols-outlined fs-6 align-middle">chevron_left</span></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link rounded-end-2" href="#"><span class="material-symbols-outlined fs-6 align-middle">chevron_right</span></a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection