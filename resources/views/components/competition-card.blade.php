{{--
    Reusable Competition Card Component
    
    Usage: <x-competition-card :lomba="$lomba" />
    
    Required: $lomba (Competition model with 'level' relation loaded)
--}}

@props(['lomba'])

<div class="card h-100 lomba-card overflow-hidden">
    <div class="img-container">
        @if($lomba->poster)
            <img src="{{ asset('storage/' . $lomba->poster) }}" alt="{{ $lomba->title }}">
        @else
            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=500&q=80" alt="Default Poster">
        @endif
        
        <div class="card-badge">
            @if(\Carbon\Carbon::parse($lomba->deadline)->isFuture())
                <span class="spinner-grow spinner-grow-sm text-success" style="width: 6px; height: 6px; margin-right: 4px;"></span>
                <span class="text-success">Opened</span>
            @else
                <span class="text-danger">Closed</span>
            @endif
        </div>
    </div>
    <div class="card-body d-flex flex-column p-4">
        <div class="mb-2">
            <span class="badge bg-light text-primary border border-primary-subtle px-2 py-1" style="font-size: 11px;">
                {{ $lomba->level->name ?? 'Umum' }}
            </span>
        </div>
        <h5 class="card-title fw-bold lh-base mb-4" style="font-size: 16px;">
            <a href="{{ route('lomba.detail', $lomba->id) }}" class="text-decoration-none text-dark hover-primary">
                {{ $lomba->title }}
            </a>
        </h5>
        <div class="mt-auto">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <small class="text-muted d-flex align-items-center gap-1" style="font-size: 12px;">
                    <span class="material-symbols-outlined fs-6">event</span> Deadline:
                </small>
                <span class="fw-bold text-danger" style="font-size: 13px;">
                    {{ \Carbon\Carbon::parse($lomba->deadline)->translatedFormat('d M Y') }}
                </span>
            </div>
            <hr class="text-muted opacity-25 my-2">
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted" style="font-size: 12px;">Aksi: <span class="fw-semibold text-dark">Daftar Sekarang</span></small>
                <a href="{{ $lomba->registration_link ?? '#' }}" target="_blank" class="btn btn-outline-primary rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Link Pendaftaran">
                    <span class="material-symbols-outlined" style="font-size: 18px;">link</span>
                </a>
            </div>
        </div>
    </div>
</div>
