@extends('layouts.app')

@section('title', 'Algorithmic Sprint 2026 - Detail Lomba | Portal Lomba TI')

@section('content')
    <section class="position-relative rounded-3 overflow-hidden mb-4 bg-dark text-white d-flex align-items-end" style="min-h: 320px; min-height: 320px;">
        <div class="position-absolute inset-0 w-100 h-100" style="top: 0; left: 0; z-index: 0;">
            <img class="w-100 h-100 object-fit-cover opacity-25" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA36qa68C_9BGMS-vJ296uKmdNGDPIVOMnnkG74HenZJF19PjHRpPUb-fHQk5ITtkBBlUwsRcCtt7s8TjclwdXtKhJcVfQ-7FrmVSdSPl9YXnvt2fbY0T0SwlTziTp_UE6ZW6ACRG2bPLuYgQscnubRVQk8AjxEmveseawDoAGOmeC_u0vkKBi5mzmdgl1XwKS8IAmaH_Yo15aGK2IlD4jgt03035tiV-TEdhHzVlfCDt_q0sLPlVbAdlt2yj5YJKAmSDQ9vH5jUA"/>
            <div class="position-absolute w-100 h-100" style="top: 0; left: 0; bg: linear-gradient(to top, rgba(0,0,0,0.8), transparent); background: linear-gradient(to top, #212529, transparent);"></div>
        </div>
        
        <div class="position-relative p-4 p-md-5 w-100" style="z-index: 1;">
            <div class="d-flex flex-column gap-2">
                <div class="d-flex flex-wrap align-items-center gap-2">
                    <span class="badge rounded-pill bg-primary text-uppercase px-3 py-2" style="letter-spacing: 0.05em; font-size: 11px;">Competitive Programming</span>
                    <span class="badge rounded-pill bg-light text-dark px-3 py-2" style="font-size: 11px;">Level: Expert</span>
                </div>
                <h1 class="display-5 fw-bold text-white my-2">Algorithmic Sprint 2026</h1>
                <div class="d-flex flex-wrap align-items-center gap-4 text-light opacity-75">
                    <div class="d-flex align-items-center gap-2">
                        <span class="material-symbols-outlined">calendar_today</span>
                        <span>15 Juni - 20 Juli 2026</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>Daring (Online)</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row g-4">
        <div class="col-lg-8 d-flex flex-column gap-4">
            
            <article class="card border-0 shadow-sm rounded-3 p-4 bg-white">
                <h2 class="h4 fw-bold text-primary mb-3 d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined">description</span> Deskripsi Lomba
                </h2>
                <div class="text-secondary lh-base">
                    <p class="mb-0">
                        Algorithmic Sprint 2026 adalah kompetisi pemrograman tingkat nasional yang menantang efisiensi berpikir dan ketajaman logika para pengembang muda di Indonesia.
                    </p>
                </div>
            </article>

            <article class="card border-0 shadow-sm rounded-3 p-4 bg-white">
                <h2 class="h4 fw-bold text-primary mb-3 d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined">assignment_turned_in</span> Persyaratan Peserta
                </h2>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-start gap-3 p-3 bg-light rounded-3">
                        <span class="material-symbols-outlined text-primary mt-1">check_circle</span>
                        <div>
                            <p class="mb-1 fw-bold text-dark">Status Mahasiswa</p>
                            <p class="mb-0 text-secondary small">Mahasiswa aktif (D3/D4/S1) dari seluruh universitas di Indonesia.</p>
                        </div>
                    </li>
                </ul>
            </article>
        </div>

        <aside class="col-lg-4">
            <div class="card border-0 bg-dark text-white p-4 shadow rounded-3 sticky-top" style="top: 100px;">
                <div class="d-flex align-items-center gap-2 mb-3 text-warning">
                    <span class="material-symbols-outlined">timer</span>
                    <span class="small fw-bold uppercase">Pendaftaran Segera Berakhir!</span>
                </div>
                
                <div class="d-flex justify-content-between align-items-center text-center mb-4 px-2">
                    <div>
                        <span class="h2 fw-bold d-block mb-0" id="days" style="font-family: monospace;">12</span>
                        <small class="text-secondary text-uppercase" style="font-size: 10px;">Hari</small>
                    </div>
                    <span class="h2 opacity-25 mb-3">:</span>
                    <div>
                        <span class="h2 fw-bold d-block mb-0" id="hours" style="font-family: monospace;">08</span>
                        <small class="text-secondary text-uppercase" style="font-size: 10px;">Jam</small>
                    </div>
                    <span class="h2 opacity-25 mb-3">:</span>
                    <div>
                        <span class="h2 fw-bold d-block mb-0" id="minutes" style="font-family: monospace;">45</span>
                        <small class="text-secondary text-uppercase" style="font-size: 10px;">Menit</small>
                    </div>
                </div>
                
                <a class="btn btn-primary btn-lg w-100 fw-bold rounded-3 py-3 shadow-sm transition-all" href="#">
                    Daftar Sekarang
                </a>
            </div>
        </aside>
    </div>
@endsection

@push('scripts')
    <script>
        function updateCountdown() {
            const minutesEl = document.getElementById('minutes');
            const minutes = parseInt(minutesEl.innerText);
            if (minutes > 0) {
                minutesEl.innerText = (minutes - 1).toString().padStart(2, '0');
            }
        }
        setInterval(updateCountdown, 60000);
    </script>
@endpush