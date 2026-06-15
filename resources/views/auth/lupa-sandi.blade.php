<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Sandi - Portal Lomba TI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9ff; min-height: 100vh; }
        .info-card { background: #fff; border-radius: 16px; border: 1px solid rgba(0,0,0,0.08); }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center p-3">

    <main class="w-100" style="max-width: 440px;">
        <div class="info-card p-4 p-md-5 text-center">
            <h4 class="fw-bold mb-3">Butuh Bantuan?</h4>
            <p class="text-muted small mb-4">Jika kamu lupa sandi, silakan hubungi administrator kami untuk proses pemulihan akun melalui kontak berikut:</p>
            
            <div class="bg-light p-3 rounded-3 mb-4 text-start">
                <p class="mb-1 small fw-bold">Email Admin:</p>
                <p class="mb-3 text-primary">2410817110002@mhs.ulm.ac.id</p>
                
                <p class="mb-1 small fw-bold">WhatsApp Admin:</p>
                <p class="mb-0 text-primary">+62 819-7443-922</p>
            </div>

            <a href="{{ route('login') }}" class="btn btn-outline-primary w-100 rounded-pill">Kembali ke Login</a>
        </div>
    </main>

</body>
</html>