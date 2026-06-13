@extends('admin.layouts.app')

@section('title', 'Kelola Kategori - Portal Lomba TI')
@section('header_title', 'Kategori Kompetisi')
@section('header_subtitle', 'Atur rumpun bidang studi IT untuk klasifikasi lomba.')

@section('content')
<div class="row g-4">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-4" style="font-size: 18px; color: #0b1c30;">Rumpun Kategori Aktif</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-muted small">
                        <tr>
                            <th class="border-0 px-3 py-3">Nama Kategori</th>
                            <th class="border-0 py-3">Slug Rute</th>
                            <th class="border-0 py-3 text-center">Jumlah Lomba</th>
                            <th class="border-0 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="small">
                        <tr>
                            <td class="px-3 py-3 fw-semibold">Web Development</td>
                            <td><code>web-development</code></td>
                            <td class="text-center fw-medium">45</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-sm btn-light text-primary p-2 d-inline-flex rounded-2"><span class="material-symbols-outlined fs-5">edit</span></button>
                                    <button class="btn btn-sm btn-light text-danger p-2 d-inline-flex rounded-2"><span class="material-symbols-outlined fs-5">delete</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3 py-3 fw-semibold">Cyber Security</td>
                            <td><code>cyber-security</code></td>
                            <td class="text-center fw-medium">25</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-sm btn-light text-primary p-2 d-inline-flex rounded-2"><span class="material-symbols-outlined fs-5">edit</span></button>
                                    <button class="btn btn-sm btn-light text-danger p-2 d-inline-flex rounded-2"><span class="material-symbols-outlined fs-5">delete</span></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-3" style="font-size: 16px; color: #0b1c30;">Tambah Cepat</h5>
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-muted small fw-semibold">Nama Kategori Baru</label>
                    <input type="text" name="name" class="form-control form-control-sm p-2" placeholder="Contoh: Mobile Apps" required style="border-radius: 8px;">
                </div>
                <button type="submit" class="btn btn-primary btn-sm w-100 py-2 fw-semibold" style="border-radius: 8px; background-color: #316bf3; border: none;">
                    Simpan Kategori
                </button>
            </form>
        </div>
    </div>
</div>
@endsection