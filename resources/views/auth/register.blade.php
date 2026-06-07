<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Portal Lomba TI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9ff;
            background-image: radial-gradient(at 0% 0%, hsla(220,100%,95%,1) 0, transparent 50%), 
                              radial-gradient(at 100% 100%, hsla(210,100%,90%,1) 0, transparent 50%);
            min-height: 100vh;
        }
        .register-card {
            background-color: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .input-group-text { background-color: #f8f9ff; border-right: none; color: #76777d; }
        .form-control { border-left: none; }
        .form-control:focus { box-shadow: 0 0 0 4px rgba(0, 81, 213, 0.1); border-color: #0051d5; }
    </style>
</head>
<body class="d-flex flex-column justify-content-center align-items-center p-3">

    <div class="text-center mb-4">
        <h1 class="fw-bold text-primary m-0" style="font-size: 28px; color: #0051d5 !important;">Portal Lomba TI</h1>
        <p class="text-muted small mt-1">Daftar Akun Peserta Baru</p>
    </div>

    <main class="w-100" style="max-width: 440px;">
        <div class="register-card p-4 p-md-5">
            <header class="mb-4">
                <h3 class="fw-bold text-dark mb-1" style="font-size: 20px;">Buat Akun Gratis</h3>
                <p class="text-muted small m-0">Mulai langkahmu memenangkan kompetisi bergengsi.</p>
            </header>

            <form action="#" onsubmit="event.preventDefault();">
                <div class="mb-3">
                    <label class="form-label small fw-semibold text-dark" for="name">Nama Lengkap</label>
                    <div class="input-group">
                        <span class="input-group-text"><span class="material-symbols-outlined fs-5">person</span></span>
                        <input type="text" class="form-control" id="name" placeholder="Nama lengkap Anda" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label small fw-semibold text-dark" for="email">Alamat Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><span class="material-symbols-outlined fs-5">mail</span></span>
                        <input type="email" class="form-control" id="email" placeholder="nama@email.com" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label small fw-semibold text-dark" for="password">Kata Sandi Baru</label>
                    <div class="input-group">
                        <span class="input-group-text"><span class="material-symbols-outlined fs-5">lock</span></span>
                        <input type="password" class="form-control" id="password" placeholder="Minimal 8 karakter" required>
                    </div>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="terms" required>
                    <label class="form-check-label text-muted small" for="terms">
                        Saya menyetujui semua Syarat & Ketentuan Layanan.
                    </label>
                </div>

                <button class="btn btn-primary w-100 py-2 fw-semibold border-0" type="submit" style="background-color: #0051d5; border-radius: 8px;">
                    Daftar Akun Sekarang
                </button>
            </form>

            <footer class="mt-4 text-center">
                <p class="text-muted small m-0">
                    Sudah memiliki akun? <a class="fw-bold text-decoration-none" href="{{ route('login') }}" style="color: #0051d5;">Masuk di Sini</a>
                </p>
            </footer>
        </div>
    </main>
</body>
</html>