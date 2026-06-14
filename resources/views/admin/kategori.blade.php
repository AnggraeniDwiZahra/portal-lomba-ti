@extends('admin.layouts.app')

@section('title', 'Kelola Kategori - Portal Lomba TI')
@section('header_title', 'Manajemen Kategori')
@section('header_subtitle', 'Atur rumpun bidang kompetisi IT yang tersedia di platform.')

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
    <div class="col-md-4">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-3" style="font-size: 16px; color: #0b1c30;">Tambah Kategori</h5>
            <form action="{{ route('admin.kategori.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-muted small fw-semibold">Nama Kategori</label>
                    <input type="text" name="name" class="form-control" placeholder="Contoh: Cyber Security" required style="border-radius: 8px;">
                </div>
                <button type="submit" class="btn btn-primary btn-sm w-100 py-2 fw-semibold" style="border-radius: 8px; background-color: #316bf3; border: none;">
                    Simpan Kategori
                </button>
            </form>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-4" style="font-size: 16px; color: #0b1c30;">Daftar Kategori Saat Ini</h5>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-muted small">
                        <tr>
                            <th class="border-0 px-3 py-3" style="width: 15%;">ID</th>
                            <th class="border-0 py-3">Nama Kategori Rumpun</th>
                            <th class="border-0 py-3 text-center" style="width: 25%;">Aksi Kontrol</th>
                        </tr>
                    </thead>
                    <tbody class="small">
                        @forelse($semuaKategori as $kat)
                        <tr>
                            <td class="px-3 py-3 text-muted">#{{ $kat->id }}</td>
                            <td class="fw-semibold" style="color: #0b1c30;">{{ $kat->name }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('admin.kategori.edit', $kat->id) }}" class="btn btn-sm btn-light text-primary p-2 d-inline-flex rounded-2" title="Edit Kategori">
                                        <span class="material-symbols-outlined fs-5">edit</span>
                                    </a>
                                    
                                    <form action="{{ route('admin.kategori.destroy', $kat->id) }}" method="POST" onsubmit="return confirm('Hapus kategori ini? Lomba dengan kategori ini mungkin akan terpengaruh.');" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-light text-danger p-2 d-inline-flex rounded-2" title="Hapus Kategori">
                                            <span class="material-symbols-outlined fs-5">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-4">Belum ada data kategori</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection