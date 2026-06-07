<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portal Lomba TI')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9ff;
            color: #0b1c30;
        }
        .material-symbols-outlined {
            vertical-align: middle;
        }
        .navbar-custom {
            background-color: rgba(248, 249, 255, 0.85);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .btn-primary-custom {
            background-color: #0051d5;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .btn-primary-custom:hover {
            background-color: #003ea8;
            box-shadow: 0 8px 20px rgba(0, 81, 213, 0.2);
        }
    </style>
    @stack('styles')
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light sticky-top navbar-custom py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="/" style="color: #0051d5 !important;">Portal Lomba TI</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 ms-md-4 gap-2">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('lomba*') || Request::is('detail-lomba') ? 'active fw-semibold text-primary' : 'text-muted' }}" href="{{ route('lomba.index') }}">Lomba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kategori*') ? 'active fw-semibold text-primary' : 'text-muted' }}" href="{{ route('kategori.index') }}">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('panduan*') ? 'active fw-semibold text-primary' : 'text-muted' }}" href="{{ route('panduan.index') }}">Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('faq*') ? 'active fw-semibold text-primary' : 'text-muted' }}" href="{{ route('faq.index') }}">FAQ</a>
                    </li>
                </ul>
                
                <div class="d-flex align-items-center gap-3">
                    <div class="position-relative d-none d-lg-block">
                        <span class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y ms-3 text-muted" style="font-size: 20px;">search</span>
                        <input type="text" class="form-control rounded-pill ps-5 bg-light border-0" placeholder="Cari kompetisi..." style="width: 240px; padding-top: 8px; padding-bottom: 8px;">
                    </div>
                    <button class="btn text-primary fw-semibold">Masuk</button>
                    <button class="btn btn-primary-custom text-white px-4">Daftar</button>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="text-white py-5 mt-5" style="background-color: #213145;">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-6">
                    <h5 class="fw-bold text-white mb-3">Portal Lomba TI</h5>
                    <p class="text-white-50 w-75 small">Portal informasi lomba IT terintegrasi untuk mengasah skill digital mahasiswa.</p>
                </div>
                <div class="col-6 col-lg-3">
                    <h6 class="fw-bold text-white mb-3">Navigasi</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="/" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="{{ route('lomba.index') }}" class="text-white-50 text-decoration-none">Katalog Lomba</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3">
                    <h6 class="fw-bold text-white mb-3">Legalitas</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
            <hr class="text-white opacity-25">
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center pt-2 small text-white-50">
                <p class="m-0">© 2026 Portal Lomba TI</p>
                <span class="mt-2 mt-sm-0">Made with ❤️ for IT Students</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>