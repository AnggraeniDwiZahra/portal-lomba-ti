@extends('admin.layouts.app')

@section('title', 'Edit Kompetisi - Portal Lomba TI')
@section('header_title', 'Edit Kompetisi IT')
@section('header_subtitle', 'Perbarui informasi atau batas waktu pendaftaran kompetisi.')

@section('content')
<div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
    <div class="d-flex align-items-center mb-4">
        <a href="{{ route('admin.lomba') }}" class="btn btn-light btn-sm d-inline-flex p-2 rounded-2 me-3">
            <span class="material-symbols-outlined fs-5">arrow_back</span>
        </a>
        <h5 class="fw-bold m-0" style="font-size: 18px; color: #0b1c30;">Form Perbarui Data</h5>
    </div>

    <form action="{{ route('admin.lomba.update', $lomba->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="row g-3">
            <div class="col-md-12">
                <label class="form-label text-muted small fw-semibold">Nama / Judul Kompetisi</label>
                <input type="text" name="title" class="form-control" value="{{ $lomba->title }}" required style="border-radius: 8px;">
            </div>
            
            <div class="col-md-12">
                <label class="form-label text-muted small fw-semibold">Deskripsi Kompetisi</label>
                <textarea name="description" class="form-control" rows="4" required style="border-radius: 8px;">{{ $lomba->description }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Kategori Bidang IT</label>
                <select name="category_id" class="form-select" required style="border-radius: 8px;">
                    <option value="" disabled>-- Pilih Kategori --</option>
                    @foreach($semuaKategori ?? [] as $kat)
                        <option value="{{ $kat->id }}" {{ $lomba->category_id == $kat->id ? 'selected' : '' }}>
                            {{ $kat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Tingkat / Level Kompetisi</label>
                <select name="level_id" class="form-select" required style="border-radius: 8px;">
                    <option value="" disabled>-- Pilih Level --</option>
                    @foreach($semuaLevel ?? [] as $lvl)
                        <option value="{{ $lvl->id }}" {{ $lomba->level_id == $lvl->id ? 'selected' : '' }}>
                            {{ $lvl->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Link Pendaftaran Eksternal</label>
                <input type="url" name="registration_link" class="form-control" value="{{ $lomba->registration_link }}" required style="border-radius: 8px;">
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Batas Akhir Pendaftaran (Deadline)</label>
                <input type="date" name="deadline" class="form-control" value="{{ \Carbon\Carbon::parse($lomba->deadline)->format('Y-m-d') }}" required style="border-radius: 8px;">
            </div>

            <div class="col-md-12">
                <label class="form-label text-muted small fw-semibold">Banner / Poster Lomba Baru <span class="text-secondary fw-normal">(Biarkan kosong jika tidak diganti)</span></label>
                <input type="file" name="poster" class="form-control" accept="image/*" style="border-radius: 8px;">
                @if($lomba->poster)
                    <small class="text-primary d-block mt-1">Poster saat ini: {{ $lomba->poster }}</small>
                @endif
            </div>
        </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('admin.lomba') }}" class="btn btn-light px-4 fw-semibold" style="border-radius: 8px;">Batal</a>
            <button type="submit" class="btn btn-primary px-4 fw-semibold" style="border-radius: 8px; background-color: #316bf3; border: none;">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection