@extends('peserta.layouts.app')

@section('title', 'Lomba Tersimpan')

@section('content')
    <div class="mb-4 pb-2 border-bottom">
        <h2 class="fw-bold text-dark mb-1">Lomba Tersimpan</h2>
        <p class="text-muted mb-0">Pantau deadline dan siapkan dirimu untuk kompetisi impian.</p>
    </div>

    <div class="row g-4">
        @forelse($savedCompetitions as $lomba)
            <div class="col-md-6">
                <div class="lomba-card d-flex flex-column h-100 bg-white border rounded-3 overflow-hidden shadow-sm">
                    <div class="position-relative" style="height: 180px;">
                        <img src="{{ $lomba->image_url ?? 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=600' }}" class="w-100 h-100 object-fit-cover" alt="{{ $lomba->title }}">
                        <div class="badge-category position-absolute top-0 start-0 m-3 bg-primary text-white px-2.5 py-1 rounded-2 small fw-semibold">
                            {{ $lomba->category->name ?? 'Umum' }}
                        </div>
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-start gap-2">
                                <h5 class="fw-bold text-dark mb-2">{{ $lomba->title }}</h5>
                                
                                <form action="{{ route('peserta.lomba.toggle', $lomba->id) }}" method="POST" class="m-0">
                                    @csrf
                                    <button type="submit" class="btn btn-link text-primary p-0 border-0 shadow-none">
                                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">bookmark</span>
                                    </button>
                                </form>
                            </div>
                            <p class="text-muted small line-clamp-2 mb-3">{{ Str::limit($lomba->description, 120) }}</p>
                            <div class="mb-3">
                                <div class="d-flex align-items-center gap-2 text-muted small mb-1">
                                    <span class="material-symbols-outlined fs-6">calendar_today</span>
                                    <span>Deadline: {{ \Carbon\Carbon::parse($lomba->deadline)->translatedFormat('d M Y') }}</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 text-danger small fw-semibold">
                                    <span class="material-symbols-outlined fs-6">timer</span>
                                    <span>
                                        @php
                                            $deadline = \Carbon\Carbon::parse($lomba->deadline)->startOfDay();
                                            $now = \Carbon\Carbon::now()->startOfDay();
                                            $daysLeft = $now->diffInDays($deadline, false); 
                                        @endphp
                                        {{ $daysLeft > 0 ? 'Sisa ' . $daysLeft . ' Hari Lagi' : 'Pendaftaran Ditutup' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="badge bg-success-subtle text-success uppercase fw-bold px-2.5 py-1.5 rounded-pill" style="font-size: 10px;">Pendaftaran Buka</span>
                            <a href="/detail-lomba?id={{ $lomba->id }}" class="text-primary text-decoration-none small fw-semibold d-flex align-items-center gap-1">
                                Lihat Detail <span class="material-symbols-outlined fs-6">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="mt-2 p-5 bg-light rounded-4 border border-dashed border-secondary-subtle text-center">
                    <div class="d-inline-flex p-3 bg-white rounded-circle shadow-sm mb-3">
                        <span class="material-symbols-outlined text-primary fs-3">explore</span>
                    </div>
                    <h4 class="fw-bold text-dark">Belum Ada Lomba yang Disimpan</h4>
                    <p class="text-muted mx-auto mb-4" style="max-width: 440px;">Jelajahi ribuan kompetisi TI terbaru yang sesuai dengan minat dan bakatmu lalu simpan di sini.</p>
                    <a href="{{ route('lomba.index') }}" class="btn btn-dark px-4 py-2 rounded-3 fw-semibold">Eksplorasi Lomba</a>
                </div>
            </div>
        @endforelse
    </div>
@endsection