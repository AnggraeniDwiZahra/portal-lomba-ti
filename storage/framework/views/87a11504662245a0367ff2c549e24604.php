<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Portal Lomba TI'); ?> - Dashboard Peserta</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9ff;
            color: #0b1c30;
        }
        .navbar {
            background-color: rgba(248, 249, 255, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .sidebar-card {
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 12px;
        }
        .nav-link-custom {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            color: #45464d;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.2s;
            font-weight: 500;
        }
        .nav-link-custom:hover {
            background-color: #eff4ff;
            color: #0051d5;
            transform: translateX(4px);
        }
        .nav-link-custom.active {
            background-color: #316bf3;
            color: #ffffff;
        }
        .lomba-card {
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .lomba-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(49, 107, 243, 0.05);
        }
        .hide-caret::after {
            display: none !important;
        }
    </style>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-4" href="/">Portal Lomba <span class="text-primary">TI</span></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav ms-4 gap-3">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold <?php echo e(Request::is('lomba*') ? 'text-primary' : 'text-muted'); ?>" href="<?php echo e(route('lomba.index')); ?>">Lomba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold <?php echo e(Request::is('kategori*') ? 'text-primary' : 'text-muted'); ?>" href="<?php echo e(route('kategori.index')); ?>">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold <?php echo e(Request::is('panduan*') ? 'text-primary' : 'text-muted'); ?>" href="<?php echo e(route('panduan.index')); ?>">Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold <?php echo e(Request::is('faq*') ? 'text-primary' : 'text-muted'); ?>" href="<?php echo e(route('faq.index')); ?>">FAQ</a>
                    </li>
                </ul>
                
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center gap-3 text-decoration-none dropdown-toggle text-dark hide-caret" id="dropdownMenuProfile" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="text-end d-none d-sm-block">
                            <p class="fw-bold mb-0 text-dark" style="font-size: 14px; line-height: 1.2;"><?php echo e(Auth::user()->name); ?></p>
                            <small class="text-muted d-block" style="font-size: 11px; margin-top: 2px;">Mahasiswa</small>
                        </div>

                        <div class="rounded-circle bg-primary-subtle d-flex align-items-center justify-content-center overflow-hidden border border-secondary-subtle shadow-sm" style="width: 36px; height: 36px;">
                            <?php if(Auth::user()->profile_photo): ?>
                                <img src="<?php echo e(asset('storage/' . Auth::user()->profile_photo)); ?>" alt="Foto Profil" class="w-100 h-100 object-fit-cover">
                            <?php else: ?>
                                <span class="material-symbols-outlined text-primary" style="font-size: 24px; font-variation-settings: 'FILL' 1;">account_circle</span>
                            <?php endif; ?>
                        </div>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2 p-2 rounded-3" aria-labelledby="dropdownMenuProfile" style="min-width: 200px;">
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2 rounded-2 small fw-medium" href="<?php echo e(route('dashboard')); ?>">
                                <span class="material-symbols-outlined fs-5 text-muted">dashboard</span>
                                Dashboard Saya
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2 rounded-2 small fw-medium" href="<?php echo e(route('peserta.profil.edit')); ?>">
                                <span class="material-symbols-outlined fs-5 text-muted">person</span>
                                Profil Saya
                            </a>
                        </li>
                        <li><hr class="dropdown-divider opacity-50 my-2"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2 rounded-2 small fw-medium text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form-dashboard').submit();">
                                <span class="material-symbols-outlined fs-5">logout</span>
                                Keluar Sesi
                            </a>
                            <form id="logout-form-dashboard" action="/logout" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <div class="row g-4">
            <aside class="col-lg-3">
                <?php echo $__env->make('peserta.layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </aside>

            <section class="col-lg-9">
                <?php echo $__env->yieldContent('content'); ?>
            </section>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\laragon\www\portal-lomba-ti\resources\views/peserta/layouts/app.blade.php ENDPATH**/ ?>