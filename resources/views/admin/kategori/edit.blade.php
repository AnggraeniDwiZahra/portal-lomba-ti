@extends('admin.layouts.app')

@section('title', 'Edit Kategori - Portal Lomba TI')
@section('header_title', 'Edit Kategori Rumpun')
@section('header_subtitle', 'Perbarui nama rumpun bidang teknologi informasi.')

@section('content')
<div class="row g-4">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('admin.kategori') }}" class="btn btn-light btn-sm d-inline-flex p-2 rounded-2 me-3">
                    <span class="material-symbols-outlined fs-5">arrow_back</span>
                </a>
                <h5 class="fw-bold m-0" style="font-size: 18px; color: #0b1c30;">Form Perbarui Kategori</h5>
            </div>

            <form action="{{ route('admin.kategori.update', $kategori->id) }}" method="POST">
                @csrf
                @method('PUT') <div class="mb-4">
                    <label class="form-label text-muted small fw-semibold">Nama Kategori</label>
                    <input type="text" name="name" class="form-control" value="{{ $kategori->name }}" required style="border-radius: 8px;">
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.kategori') }}" class="btn btn-light px-4 fw-semibold" style="border-radius: 8px;">Batal</a>
                    <button type="submit" class="btn btn-primary px-4 fw-semibold" style="border-radius: 8px; background-color: #316bf3; border: none;">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsectionbelu