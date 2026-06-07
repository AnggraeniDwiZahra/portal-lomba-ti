<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Portal Lomba TI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9ff;
            background-image: radial-gradient(at 0% 0%, hsla(220,100%,95%,1) 0, transparent 50%), 
                              radial-gradient(at 100% 100%, hsla(210,100%,90%,1) 0, transparent 50%);
            min-height: 100vh;
        }
        .login-card {
            background-color: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .login-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05);
        }
        .input-group-text {
            background-color: #f8f9ff;
            border-right: none;
            color: #76777d;
        }
        .form-control {
            border-left: none;
        }
        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(0, 81, 213, 0.1);
            border-color: #0051d5;
        }
        .role-switcher {
            background-color: #eff4ff;
            padding: 4px;
            border-radius: 10px;
        }
        .role-btn {
            border: none;
            background: transparent;
            padding: 8px 0;
            font-size: 14px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.2s ease;
        }
        .role-btn.active {
            background-color: #ffffff;
            color: #0051d5;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body class="d-flex flex-column justify-content-center align-items-center p-3">

    <div class="text-center mb-4">
        <h1 class="fw-bold text-primary m-0" style="font-size: 28px; color: #0051d5 !important;">Portal Lomba TI</h1>
        <p class="text-muted small mt-1">Pusat Kompetensi IT Masa Depan</p>
    </div>

    <main class="w-100" style="max-width: 440px;">
        <div class="login-card p-4 p-md-5">
            <header class="mb-4">
                <h3 class="fw-bold text-dark mb-1" style="font-size: 20px;">Selamat Datang Kembali</h3>
                <p class="text-muted small m-0">Silakan masuk ke akun Anda untuk melanjutkan.</p>
            </header>

            <div class="row g-0 role-switcher mb-4" id="role-switcher">
                <button class="col role-btn active" id="btn-user" onclick="switchRole('user')">Peserta</button>
                <button class="col role-btn text-muted" id="btn-admin" onclick="switchRole('admin')">Administrator</button>
            </div>

            <form action="#" onsubmit="event.preventDefault();">
                <div class="mb-3">
                    <label class="form-label small fw-semibold text-dark" for="email">Alamat Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><span class="material-symbols-outlined fs-5">mail</span></span>
                        <input type="email" class="form-control" id="email" placeholder="nama@email.com" required>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <label class="form-label small fw-semibold text-dark m-0" for="password">Kata Sandi</label>
                        <a class="small text-decoration-none" href="#" style="color: #0051d5; font-size: 13px;">Lupa sandi?</a>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"><span class="material-symbols-outlined fs-5">lock</span></span>
                        <input type="password" class="form-control border-end-0" id="password" placeholder="••••••••" required>
                        <button class="btn btn-outline-secondary border-start-0 bg-white text-muted border-secondary-subtle" type="button" style="border-top-right-radius: 6px; border-bottom-right-radius: 6px;">
                            <span class="material-symbols-outlined fs-5 align-middle">visibility</span>
                        </button>
                    </div>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label text-muted small" for="remember">
                        Ingat saya di perangkat ini
                    </label>
                </div>

                <button class="btn btn-primary w-100 py-2 fw-semibold border-0 shadow-sm" type="submit" style="background-color: #0051d5; border-radius: 8px;">
                    Masuk Sekarang
                </button>
            </form>

            <div class="mt-4">
                <div class="d-flex align-items-center mb-3">
                    <hr class="flex-grow-1 text-muted opacity-25">
                    <span class="mx-2 text-muted" style="font-size: 12px;">atau masuk dengan</span>
                    <hr class="flex-grow-1 text-muted opacity-25">
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <button class="btn btn-light w-100 border border-secondary-subtle d-flex align-items-center justify-content-center gap-2 py-2" style="font-size: 13px; font-weight: 500; background-color: #ffffff;">
                            <i class="bi bi-google text-danger" style="font-size: 16px;"></i>
                            Google
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-light w-100 border border-secondary-subtle d-flex align-items-center justify-content-center gap-2 py-2" style="font-size: 13px; font-weight: 500; background-color: #ffffff;">
                            <i class="bi bi-github text-dark" style="font-size: 16px;"></i>
                            GitHub
                        </button>
                    </div>
                </div>
            </div>

            <footer class="mt-4 text-center">
                <p class="text-muted small m-0">
                    Belum punya akun? <a class="fw-bold text-decoration-none" href="{{ route('register') }}" style="color: #0051d5;">Daftar Gratis</a>
                </p>
            </footer>
        </div>
    </main>

    <script>
        function switchRole(role) {
            const btnUser = document.getElementById('btn-user');
            const btnAdmin = document.getElementById('btn-admin');
            
            if (role === 'user') {
                btnUser.classList.add('active');
                btnUser.classList.remove('text-muted');
                btnAdmin.classList.remove('active');
                btnAdmin.classList.add('text-muted');
            } else {
                btnAdmin.classList.add('active');
                btnAdmin.classList.remove('text-muted');
                btnUser.classList.remove('active');
                btnUser.classList.add('text-muted');
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>