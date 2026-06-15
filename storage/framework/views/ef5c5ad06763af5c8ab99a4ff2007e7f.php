<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Portal Lomba TI'); ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
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
        /* Menghilangkan panah dropdown */
        .hide-caret::after {
            display: none !important;
        }
    </style>
    <?php echo $__env->yieldPushContent('styles'); ?>
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
                        <a class="nav-link <?php echo e(Request::is('lomba*') || Request::is('detail-lomba') ? 'active fw-semibold text-primary' : 'text-muted'); ?>" href="<?php echo e(route('lomba.index')); ?>">Lomba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('kategori*') ? 'active fw-semibold text-primary' : 'text-muted'); ?>" href="<?php echo e(route('kategori.index')); ?>">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('panduan*') ? 'active fw-semibold text-primary' : 'text-muted'); ?>" href="<?php echo e(route('panduan.index')); ?>">Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('faq*') ? 'active fw-semibold text-primary' : 'text-muted'); ?>" href="<?php echo e(route('faq.index')); ?>">FAQ</a>
                    </li>
                </ul>
                
                <div class="d-flex align-items-center gap-3">
                    <form action="<?php echo e(route('lomba.index')); ?>" method="GET" class="position-relative d-none d-lg-block m-0">
                        <span class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y ms-3 text-muted" style="font-size: 20px;">search</span>
                        <input type="text" 
                               name="search" 
                               value="<?php echo e(request('search')); ?>" 
                               class="form-control rounded-pill ps-5 bg-light border-0" 
                               placeholder="Cari kompetisi..." 
                               style="min-width: 200px; padding-top: 8px; padding-bottom: 8px;">
                    </form>
                    
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(route('login')); ?>" class="btn text-primary fw-semibold text-decoration-none">Masuk</a>
                        <a href="<?php echo e(route('register')); ?>" class="btn btn-primary-custom text-white px-4 text-decoration-none">Daftar</a>
                    <?php endif; ?>

                    <?php if(auth()->guard()->check()): ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center gap-2 fw-semibold text-dark hide-caret" href="#" role="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="rounded-circle bg-primary-subtle d-flex align-items-center justify-content-center overflow-hidden border border-secondary-subtle shadow-sm" style="width: 36px; height: 36px;">
                                    <?php if(Auth::user()->profile_photo): ?>
                                        <img src="<?php echo e(asset('storage/' . Auth::user()->profile_photo)); ?>" alt="Foto Profil" class="w-100 h-100 object-fit-cover">
                                    <?php else: ?>
                                        <span class="material-symbols-outlined text-primary" style="font-size: 24px; font-variation-settings: 'FILL' 1;">account_circle</span>
                                    <?php endif; ?>
                                </div>
                                <span class="small d-none d-sm-inline"><?php echo e(Auth::user()->name); ?></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2 p-2" aria-labelledby="userMenu" style="border-radius: 12px; min-width: 200px;">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2 rounded-3 small fw-medium" href="<?php echo e(route('dashboard')); ?>">
                                        <span class="material-symbols-outlined text-muted fs-5">dashboard</span>
                                        Dashboard Saya
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2 rounded-3 small fw-medium" href="<?php echo e(route('peserta.profil.edit')); ?>">
                                        <span class="material-symbols-outlined text-muted fs-5">person</span>
                                        Edit Profil
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider opacity-50 my-2"></li>
                                <li>
                                    <form action="<?php echo e(route('logout')); ?>" method="POST" class="m-0" id="landing-logout-form">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="dropdown-item d-flex align-items-center gap-2 py-2 rounded-3 small text-danger fw-medium w-100 border-0 bg-transparent">
                                            <span class="material-symbols-outlined fs-5">logout</span>
                                            Keluar Sesi
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="text-white py-5 mt-5" style="background-color: #213145;">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-8">
                    <h5 class="fw-bold text-white mb-3">Portal Lomba TI</h5>
                    <p class="text-white-50 w-75 small">Portal informasi lomba IT terintegrasi untuk mengasah skill digital mahasiswa.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <h6 class="fw-bold text-white mb-3">Navigasi</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="/" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="<?php echo e(route('lomba.index')); ?>" class="text-white-50 text-decoration-none">Katalog Lomba</a></li>
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
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\laragon\www\portal-lomba-ti\resources\views/layouts/app.blade.php ENDPATH**/ ?>