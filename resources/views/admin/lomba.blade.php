@extends('admin.layouts.app')

@section('title', 'Kelola Lomba - Portal Lomba TI')
@section('header_title', 'Manajemen Lomba')
@section('header_subtitle', 'Kelola, edit, dan pantau seluruh data kompetisi IT yang terdaftar di sistem.')

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

<div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold m-0" style="font-size: 18px; color: #0b1c30;">Daftar Kompetisi</h5>
        <a href="{{ route('admin.lomba.create') }}" class="btn btn-primary btn-sm fw-semibold d-flex align-items-center gap-2 px-3 py-2" style="border-radius: 8px; background-color: #316bf3; border: none;">
            <span class="material-symbols-outlined fs-5">add_circle</span> Tambah Lomba
        </a>
    </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
        <thead class="table-light text-muted small">
            <tr>
                <th class="border-0 px-3 py-3" style="width: 80px;">Poster</th>
                <th class="border-0 px-3 py-3">Nama Lomba</th>
                <th class="border-0 py-3">Level</th>
                <th class="border-0 py-3">Deadline</th>
                <th class="border-0 py-3 text-center">Status Pendaftaran</th>
                <th class="border-0 py-3 text-center">Aksi</th>
            </tr>
        </thead>
    <tbody class="small">
    @forelse($semuaLomba as $lomba)
    <tr>
        <td class="px-3 py-3 text-center">
            @if($lomba->poster)
                <img src="{{ asset('storage/' . $lomba->poster) }}" alt="{{ $lomba->title }}" class="rounded shadow-sm" style="width: 50px; height: 50px; object-fit: cover;">
            @else
                <div class="bg-light rounded d-flex align-items-center justify-content-center text-muted mx-auto" style="width: 50px; height: 50px;">
                    <span class="material-symbols-outlined fs-5">image_not_supported</span>
                </div>
            @endif
        </td>

        <td class="px-3 py-3 fw-semibold">
            {{ $lomba->title }}
            <span class="text-muted fw-normal d-block" style="font-size: 12px;">ID: COMP-{{ $lomba->id }}</span>
        </td>
                    
                    <td>
                        {{ \Carbon\Carbon::parse($lomba->deadline)->translatedFormat('d F Y') }}
                    </td>
                    
                    <td class="text-center">
                        @if(\Carbon\Carbon::parse($lomba->deadline)->isFuture())
                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-semibold">Terbuka</span>
                        @else
                            <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill fw-semibold">Ditutup</span>
                        @endif
                    </td>
                    
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('admin.lomba.edit', $lomba->id) }}" class="btn btn-sm btn-light text-primary p-2 d-inline-flex rounded-2" title="Edit Data">
                                <span class="material-symbols-outlined fs-5">edit</span>
                            </a>
                            
                            <form action="{{ route('admin.lomba.destroy', $lomba->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kompetisi ini secara permanen?');" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-light text-danger p-2 d-inline-flex rounded-2" title="Hapus Data">
                                    <span class="material-symbols-outlined fs-5">delete</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-5">
                        <span class="material-symbols-outlined fs-1 d-block mb-2 text-secondary">inventory_2</span>
                        Belum ada data kompetisi IT di database.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection