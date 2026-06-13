<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - Portal Lomba TI')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9ff;
            color: #0b1c30;
        }
        /* Sidebar Styling */
        .admin-sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #eff4ff;
            border-right: 1px solid #dce9ff;
            z-index: 1030;
            display: flex;
            flex-direction: column;
            padding: 24px 16px;
        }
        .sidebar-brand {
            font-weight: 700;
            font-size: 20px;
            color: #0051d5;
            text-decoration: none;
        }
        .nav-custom .nav-link {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 12px 16px;
            color: #45464d;
            font-weight: 600;
            font-size: 14px;
            border-radius: 8px;
            transition: all 0.2s ease;
            margin-bottom: 4px;
        }
        .nav-custom .nav-link:hover {
            background-color: #dce9ff;
            color: #0b1c30;
        }
        .nav-custom .nav-link.active {
            background-color: #316bf3;
            color: #ffffff;
        }
        .nav-custom .nav-link.active .material-symbols-outlined {
            font-variation-settings: 'FILL' 1;
        }
        /* Main Content Wrapper */
        .admin-main {
            margin-left: 260px;
            padding: 32px;
            min-height: 100vh;
        }
        /* Search Bar & Profile Header */
        .search-container {
            position: relative;
        }
        .search-input {
            background-color: #ffffff;
            border: 1px solid #c6c6cd;
            border-radius: 8px;
            padding: 8px 16px 8px 40px;
            font-size: 14px;
            outline: none;
            transition: all 0.2s;
            width: 240px;
        }
        .search-input:focus {
            border-color: #0051d5;
            box-shadow: 0 0 0 2px rgba(0, 81, 213, 0.15);
            width: 300px;
        }
        .profile-pill {
            background-color: #ffffff;
            border: 1px solid #dce9ff;
            padding: 6px 16px 6px 6px;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.2s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }
        .profile-pill:hover {
            background-color: #eff4ff;
            border-color: #316bf3;
        }
        .hide-caret::after {
            display: none !important;
        }
    </style>
</head>
<body>

    <aside class="admin-sidebar">
        <div class="px-2 mb-4">
            <a href="#" class="sidebar-brand text-primary">Portal Lomba TI</a>
            <small class="d-block text-muted" style="font-size: 12px; margin-top: 4px;">Admin Portal</small>
        </div>

        <nav class="nav nav-custom flex-column flex-grow-1">
            <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="nav-link {{ Request::is('admin/lomba*') ? 'active' : '' }}" href="{{ route('admin.lomba') }}">
                <span class="material-symbols-outlined">event_note</span>
                <span>Kelola Lomba</span>
            </a>
            <a class="nav-link {{ Request::is('admin/kategori*') ? 'active' : '' }}" href="{{ route('admin.kategori') }}">
                <span class="material-symbols-outlined">category</span>
                <span>Kategori</span>
            </a>
            <a class="nav-link {{ Request::is('admin/pengguna*') ? 'active' : '' }}" href="{{ route('admin.pengguna') }}">
                <span class="material-symbols-outlined">group</span>
                <span>Pengguna</span>
            </a>

            <div class="pt-3 mt-3 border-top border-secondary-subtle">
                <button class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2 py-2 fw-semibold" style="border-radius: 8px; background-color: #316bf3; border: none;">
                    <span class="material-symbols-outlined fs-5">add</span>
                    <span style="font-size: 14px;">Tambah Lomba Baru</span>
                </button>
            </div>
        </nav>

        <div class="mt-auto nav-custom">
            <div class="px-3 py-2 mb-3 bg-white/50 rounded-3 border border-dark-subtle/10 text-center">
                <small class="text-muted d-block" style="font-size: 11px;">Operator Sesi:</small>
                <span class="fw-bold text-dark small">{{ Auth::user()->name ?? 'Yudi Admin' }}</span>
            </div>
            <a class="nav-link" href="#">
                <span class="material-symbols-outlined">settings</span>
                <span>Pengaturan</span>
            </a>
            <a class="nav-link text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form-admin').submit();">
                <span class="material-symbols-outlined">logout</span>
                <span>Keluar</span>
            </a>
            <form id="logout-form-admin" action="/logout" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </aside>

    <main class="admin-main">
        <header class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1" style="font-size: 28px; letter-spacing: -0.02em;">@yield('header_title', 'Dashboard Overview')</h2>
                <p class="text-muted mb-0" style="font-size: 15px;">@yield('header_subtitle', 'Selamat datang kembali, Super Admin.')</p>
            </div>
            
            <div class="d-flex align-items-center gap-3">
                <form action="#" method="GET" class="search-container d-none d-md-block">
                    <span class="position-absolute top-50 start-0 translate-middle-y ms-3 material-symbols-outlined text-muted fs-5">search</span>
                    <input type="text" name="search" class="search-input" value="{{ request('search') }}" placeholder="Cari nama kompetisi / data...">
                </form>

                <div class="dropdown">
                    <a class="d-flex align-items-center gap-2 profile-pill dropdown-toggle hide-caret text-decoration-none" 
                       href="#" 
                       role="button" 
                       id="adminProfileDropdown" 
                       data-bs-toggle="dropdown" 
                       aria-expanded="false">
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center fw-bold" style="width: 32px; height: 32px; font-size: 14px;">
                            {{ strtoupper(substr(Auth::user()->name ?? 'Y', 0, 1)) }}
                        </div>
                        <span class="text-dark fw-semibold px-1" style="font-size: 14px;">
                            {{ Auth::user()->name ?? 'Yudi Admin' }}
                        </span>
                        <span class="material-symbols-outlined text-muted fs-5">expand_more</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2 p-2 rounded-3" aria-labelledby="adminProfileDropdown" style="min-width: 210px;">
                        <li class="px-3 py-2">
                            <p class="fw-bold mb-0 text-dark small">{{ Auth::user()->name ?? 'Yudi Admin' }}</p>
                            <small class="text-muted" style="font-size: 11px;">{{ Auth::user()->email ?? 'admin@portal.com' }}</small>
                            <span class="badge bg-primary-subtle text-primary d-block mt-1 text-center" style="font-size: 10px; width: fit-content;">{{ ucfirst(Auth::user()->role ?? 'admin') }}</span>
                        </li>
                        <li><hr class="dropdown-divider opacity-50 my-2"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2 rounded-2 small fw-medium text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form-admin').submit();">
                                <span class="material-symbols-outlined fs-5">logout</span>
                                Keluar Sesi
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="container-fluid p-0">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>