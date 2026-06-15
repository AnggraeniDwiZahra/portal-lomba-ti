<div class="sidebar-card p-4 text-center position-sticky" style="top: 100px;">
    <div class="position-relative d-inline-block mb-3">
        <div class="rounded-circle bg-primary-subtle d-flex align-items-center justify-content-center border border-4 border-light shadow-sm overflow-hidden" style="width: 96px; height: 96px;">
            @if(Auth::user()->profile_photo)
                <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Foto Profil" class="w-100 h-100 object-fit-cover">
            @else
                <span class="material-symbols-outlined text-primary" style="font-size: 56px; font-variation-settings: 'FILL' 1;">account_circle</span>
            @endif
        </div>
    </div>
    <h5 class="fw-bold mb-1 text-dark">{{ Auth::user()->name }}</h5>
    <p class="text-muted small mb-0 text-truncate px-1">{{ Auth::user()->email }}</p>
    
    <hr class="my-4 text-muted opacity-25">
    
    <nav class="d-flex flex-column gap-2 text-start">
        <a class="nav-link-custom {{ Request::is('peserta/profil*') ? 'active' : '' }}" href="{{ route('peserta.profil.edit') }}">
            <span class="material-symbols-outlined {{ Request::is('peserta/profil*') ? '' : 'text-muted' }}">person</span>
            <span>Profil Saya</span>
        </a>
        <a class="nav-link-custom {{ Request::is('dashboard') || Request::is('peserta/lomba-tersimpan*') ? 'active' : '' }}" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined {{ Request::is('dashboard') || Request::is('peserta/lomba-tersimpan*') ? '' : 'text-muted' }}">bookmark</span>
            <span>Lomba Tersimpan</span>
        </a>
    </nav>
    
    <hr class="my-4 text-muted opacity-25">
    
    <form action="{{ route('logout') }}" method="POST" class="m-0">
        @csrf
        <button type="submit" class="btn btn-link text-danger w-100 text-start nav-link-custom p-3 border-0 bg-transparent shadow-none" style="transform: none; background: none;">
            <span class="material-symbols-outlined">logout</span>
            <span>Keluar Sesi</span>
        </button>
    </form>
</div>