@extends('admin.layouts.app')

@section('title', 'Pengaturan - Portal Lomba TI')
@section('header_title', 'Pengaturan Akun')
@section('header_subtitle', 'Kelola keamanan akun administrator Anda secara berkala.')

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert" style="border-radius: 12px;">
    <div class="d-flex align-items-center gap-2">
        <span class="material-symbols-outlined fs-5">check_circle</span>
        <div>{{ session('success') }}</div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row g-4">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-4" style="font-size: 16px; color: #0b1c30;">Ganti Password Keamanan</h5>
            
            <form action="{{ route('admin.pengaturan.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label text-muted small fw-semibold">Password Saat Ini</label>
                    <input type="password" name="current_password" class="form-control" required style="border-radius: 8px;" placeholder="••••••••">
                </div>

                <div class="mb-3">
                    <label class="form-label text-muted small fw-semibold">Password Baru</label>
                    <input type="password" name="new_password" class="form-control" required style="border-radius: 8px;" placeholder="Minimal 8 karakter">
                </div>

                <div class="mb-4">
                    <label class="form-label text-muted small fw-semibold">Konfirmasi Password Baru</label>
                    <input type="password" name="new_password_confirmation" class="form-control" required style="border-radius: 8px;" placeholder="Ulangi password baru">
                </div>

                <button type="submit" class="btn btn-primary btn-sm px-4 py-2 fw-semibold" style="border-radius: 8px; background-color: #316bf3; border: none;">
                    Perbarui Password
                </button>
            </form>
        </div>
    </div>
</div>
@endsection