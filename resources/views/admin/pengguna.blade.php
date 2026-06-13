@extends('admin.layouts.app')

@section('title', 'Kelola Pengguna - Portal Lomba TI')
@section('header_title', 'Daftar Pengguna')
@section('header_subtitle', 'Pantau akun mahasiswa dan role operasional sistem.')

@section('content')
<div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold m-0" style="font-size: 18px; color: #0b1c30;">Database Akun</h5>
        <input type="text" class="form-control form-control-sm px-3 py-2" placeholder="Cari nama / email..." style="max-width: 250px; border-radius: 8px;">
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light text-muted small">
                <tr>
                    <th class="border-0 px-3 py-3">Identitas Pengguna</th>
                    <th class="border-0 py-3">Email</th>
                    <th class="border-0 py-3">Role Akses</th>
                    <th class="border-0 py-3 text-center">Aksi Control</th>
                </tr>
            </thead>
            <tbody class="small">
                <tr>
                    <td class="px-3 py-3 fw-semibold">
                        Akhmad Daffa Azzikri
                        <span class="text-muted fw-normal d-block" style="font-size: 12px;">Mhs Teknologi Informasi</span>
                    </td>
                    <td><code>2410817110002@mhs.ulm.ac.id</code></td>
                    <td><span class="badge bg-info-subtle text-info px-2 py-1 rounded-2">Mahasiswa</span></td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-light text-muted p-2 rounded-2" title="Blokir Akun"><span class="material-symbols-outlined fs-5">block</span></button>
                    </td>
                </tr>
                <tr>
                    <td class="px-3 py-3 fw-semibold">
                        Yudi Admin
                        <span class="text-muted fw-normal d-block" style="font-size: 12px;">Super Operator</span>
                    </td>
                    <td><code>admin@portal.com</code></td>
                    <td><span class="badge bg-danger-subtle text-danger px-2 py-1 rounded-2">Admin</span></td>
                    <td class="text-center">
                        <span class="text-muted small italic">Akses Utama</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection