@extends('admin.layouts.app')

@section('title', 'Kelola Pengguna - Portal Lomba TI')
@section('header_title', 'Manajemen Pengguna')
@section('header_subtitle', 'Pantau akun pengguna, hak akses, dan peran (role) sistem.')

@section('content')
<div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold m-0" style="font-size: 16px; color: #0b1c30;">Daftar Akun Terdaftar</h5>
        <span class="badge bg-light text-dark border px-3 py-2" style="border-radius: 8px;">
            Total: {{ $semuaPengguna->count() }} Pengguna
        </span>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light text-muted small">
                <tr>
                    <th class="border-0 px-3 py-3">Nama Pengguna</th>
                    <th class="border-0 py-3">Alamat Email</th>
                    <th class="border-0 py-3 text-center">Peran (Role)</th>
                    <th class="border-0 py-3 text-center">Tanggal Bergabung</th>
                </tr>
            </thead>
            <tbody class="small">
                @forelse($semuaPengguna as $user)
                <tr>
                    <td class="px-3 py-3 d-flex align-items-center gap-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary text-white fw-bold rounded-circle" style="width: 36px; height: 36px; font-size: 14px;">
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        </div>
                        <div>
                            <span class="fw-semibold d-block text-dark">{{ $user->name }}</span>
                            <span class="text-muted" style="font-size: 11px;">UID: USER-{{ $user->id }}</span>
                        </div>
                    </td>
                    
                    <td>{{ $user->email }}</td>
                    
                    <td class="text-center">
                        @if($user->role == 'admin')
                            <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-3 fw-semibold">Admin Sistem</span>
                        @else
                            <span class="badge bg-info-subtle text-info px-3 py-2 rounded-3 fw-semibold">Mahasiswa</span>
                        @endif
                    </td>
                    
                    <td class="text-center text-muted">
                        {{ $user->created_at ? $user->created_at->translatedFormat('d M Y') : '-' }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-5">
                        <span class="material-symbols-outlined fs-1 d-block mb-2 text-secondary">group_off</span>
                        Belum ada data pengguna yang terdaftar di database.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection