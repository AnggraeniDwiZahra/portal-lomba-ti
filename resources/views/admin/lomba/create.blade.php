@extends('admin.layouts.app')

@section('title', 'Tambah Kompetisi Baru - Portal Lomba TI')
@section('header_title', 'Tambah Kompetisi Baru')
@section('header_subtitle', 'Publikasikan kompetisi IT baru untuk mahasiswa.')

@section('content')
<div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
    <div class="d-flex align-items-center mb-4">
        <a href="{{ route('admin.lomba') }}" class="btn btn-light btn-sm d-inline-flex p-2 rounded-2 me-3">
            <span class="material-symbols-outlined fs-5">arrow_back</span>
        </a>
        <h5 class="fw-bold m-0" style="font-size: 18px; color: #0b1c30;">Form Input Kompetisi</h5>
    </div>

    <form action="{{ route('admin.lomba.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-md-12">
                <label class="form-label text-muted small fw-semibold">Nama / Judul Kompetisi</label>
                <input type="text" name="title" class="form-control" placeholder="Contoh: Hackathon Nasional 2026" required style="border-radius: 8px;">
            </div>
            
            <div class="col-md-12">
                <label class="form-label text-muted small fw-semibold">Deskripsi Kompetisi</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Jelaskan detail, ketentuan, dan syarat lomba..." required style="border-radius: 8px;"></textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Kategori Bidang IT</label>
                <select name="category_id" class="form-select" required style="border-radius: 8px;">
                    <option value="" disabled selected>-- Pilih Kategori --</option>
                    @foreach($semuaKategori ?? [] as $kat)
                        <option value="{{ $kat->id }}">{{ $kat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Tingkat / Level Kompetisi</label>
                <select name="level_id" class="form-select" required style="border-radius: 8px;">
                    <option value="" disabled selected>-- Pilih Level --</option>
                    @foreach($semuaLevel ?? [] as $lvl)
                        <option value="{{ $lvl->id }}">{{ $lvl->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Link Pendaftaran Eksternal</label>
                <input type="url" name="registration_link" class="form-control" placeholder="https://contoh-link-lomba.com" required style="border-radius: 8px;">
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Batas Akhir Pendaftaran (Deadline)</label>
                <input type="date" name="deadline" class="form-control" required style="border-radius: 8px;">
            </div>

            <div class="col-md-12">
                <label class="form-label text-muted small fw-semibold">Banner / Poster Lomba <span class="text-secondary fw-normal">(Opsional)</span></label>
                <input type="file" name="poster" class="form-control" accept="image/*" style="border-radius: 8px;">
                <small class="text-muted d-block mt-1">Format: JPG, PNG. Maksimal 2MB.</small>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('admin.lomba') }}" class="btn btn-light px-4 fw-semibold" style="border-radius: 8px;">Batal</a>
            <button type="submit" class="btn btn-primary px-4 fw-semibold" style="border-radius: 8px; background-color: #316bf3; border: none;">Mulai Publikasikan</button>
        </div>
    </form>
</div>
@endsection