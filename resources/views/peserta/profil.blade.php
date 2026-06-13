@extends('peserta.layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="mb-4">
                <h3 class="fw-bold text-dark mb-1">Pengaturan Profil</h3>
                <p class="text-muted small">Kelola informasi akun dan perbarui foto profil Anda.</p>
            </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show rounded-3 mb-3 small" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

            <form action="{{ route('peserta.profil.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card border-0 shadow-sm rounded-4 p-4 bg-white mb-4">
                    <div class="row g-4">
                        
                        <div class="col-12 text-center text-md-start d-md-flex align-items-center gap-4 border-bottom pb-4">
                            <div class="position-relative d-inline-block mb-3 mb-md-0">
                                <div class="rounded-circle bg-primary-subtle d-flex align-items-center justify-content-center border border-4 border-light shadow-sm overflow-hidden" style="width: 100px; height: 100px;">
                                    @if(Auth::user()->profile_picture)
                                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Foto Profil" class="w-100 h-100 object-fit-cover">
                                    @else
                                        <span class="material-symbols-outlined text-primary" style="font-size: 60px; font-variation-settings: 'FILL' 1;">account_circle</span>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Foto Profil</h6>
                                <p class="text-muted small mb-3">Pilih foto terbaik Anda dengan format JGP, JPEG, atau PNG.</p>
                                <input type="file" name="profile_photo" class="form-control form-control-sm rounded-3 @error('profile_photo') is-invalid @enderror" style="max-width: 300px;">
                                @error('profile_photo')
                                    <div class="invalid-feedback small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <h5 class="fw-bold text-primary mb-1">Informasi Dasar</h5>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold small text-secondary">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control py-2.5 rounded-3 border-secondary-subtle @error('name') is-invalid @enderror" value="{{ old('name', Auth::user()->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold small text-secondary">Alamat Email</label>
                            <input type="email" class="form-control py-2.5 rounded-3 border-secondary-subtle bg-light text-muted" value="{{ Auth::user()->email }}" readonly>
                            <div class="form-text text-xs text-muted mt-1">Email digunakan untuk identifikasi akun dan tidak dapat diubah.</div>
                        </div>

                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4 py-2 rounded-3 fw-bold shadow-sm">
                        Simpan Perubahan
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection