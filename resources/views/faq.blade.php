@extends('layouts.app')

@section('content')
<div class="container py-5" style="margin-top: 50px; max-width: 800px;">
    <div class="text-center mb-5">
        <small class="text-primary fw-bold text-uppercase" style="letter-spacing: 1px;">Frequently Asked Questions</small>
        <h1 class="fw-bold mt-2 mb-3">Ada Pertanyaan?</h1>
        <p class="text-muted mx-auto" style="max-width: 500px; font-size: 15px;">
            Punya kendala atau pertanyaan seputar penggunaan platform Portal Lomba TI? Temukan jawaban instan dari pertanyaan yang paling sering ditanyakan di sini.
        </p>
    </div>

    <div class="accordion d-flex flex-column gap-3" id="faqAccordion">
        
        <div class="accordion-item border border-secondary-subtle rounded-4 overflow-hidden bg-white shadow-sm">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold text-dark bg-white py-3 px-4 d-flex align-items-center gap-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                    <span class="material-symbols-outlined text-primary fs-5">help</span>
                    Apakah pendaftaran lomba dilakukan langsung di website ini?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted small lh-relaxed px-4 pb-4 pt-0 border-0 bg-white">
                    Portal Lomba TI bertindak sebagai <b>platform aggregator/katalog informasi</b>. Saat kamu mengklik tombol "Daftar Sekarang", sistem akan mengarahkan kamu langsung ke tautan pendaftaran resmi yang disediakan oleh pihak penyelenggara lomba (seperti Google Form atau website official instansi tersebut).
                </div>
            </div>
        </div>

        <div class="accordion-item border border-secondary-subtle rounded-4 overflow-hidden bg-white shadow-sm">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-semibold text-dark bg-white py-3 px-4 d-flex align-items-center gap-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
                    <span class="material-symbols-outlined text-primary fs-5">payments</span>
                    Apakah informasi lomba di platform ini dipungut biaya?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted small lh-relaxed px-4 pb-4 pt-0 border-0 bg-white">
                    Tidak sama sekali. Semua informasi kompetisi IT yang terdaftar di website ini dapat kamu akses secara <b>100% gratis</b>. Namun, untuk biaya registrasi kompetisinya sendiri bergantung pada kebijakan masing-masing instansi penyelenggara (ada yang gratis dan ada yang berbayar).
                </div>
            </div>
        </div>

        <div class="accordion-item border border-secondary-subtle rounded-4 overflow-hidden bg-white shadow-sm">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-semibold text-dark bg-white py-3 px-4 d-flex align-items-center gap-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                    <span class="material-symbols-outlined text-primary fs-5">verified_user</span>
                    Bagaimana cara memastikan bahwa info lomba tersebut valid dan bukan penipuan?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted small lh-relaxed px-4 pb-4 pt-0 border-0 bg-white">
                    Tim kami selalu melakukan proses kurasi dan verifikasi manual terhadap booklet/guidebook, website official, serta keaslian kontak penanggung jawab instansi sebelum informasi kompetisi tersebut diterbitkan ke khalayak umum di platform ini.
                </div>
            </div>
        </div>

        <div class="accordion-item border border-secondary-subtle rounded-4 overflow-hidden bg-white shadow-sm">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-semibold text-dark bg-white py-3 px-4 d-flex align-items-center gap-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false">
                    <span class="material-symbols-outlined text-primary fs-5">school</span>
                    Apakah mahasiswa semester awal boleh ikut mendaftar?
                </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted small lh-relaxed px-4 pb-4 pt-0 border-0 bg-white">
                    Tentu saja boleh! Mayoritas kompetisi IT nasional kategori mahasiswa terbuka untuk seluruh mahasiswa aktif (D3/D4/S1) tanpa batasan tingkatan semester. Kamu bisa menyaring kompetisi yang ramah pemula melalui fitur filter kategori yang sudah disediakan.
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .accordion-button:not(.collapsed) {
        color: #0051d5 !important;
        background-color: #white !important;
        box-shadow: none !important;
    }
    .accordion-button:focus {
        box-shadow: none !important;
        border-color: rgba(0,0,0,0.125) !important;
    }
    .accordion-item {
        transition: all 0.2s ease;
    }
    .accordion-item:hover {
        border-color: #0051d5 !important;
    }
</style>
@endsection