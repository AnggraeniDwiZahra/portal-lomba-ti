<?php $__env->startSection('title', 'Dashboard Overview - Portal Lomba TI'); ?>
<?php $__env->startSection('header_title', 'Dashboard Overview'); ?>
<?php $__env->startSection('header_subtitle', 'Pantau dan kelola data kompetisi IT yang aktif di platform.'); ?>

<?php $__env->startSection('content'); ?>
<div class="row g-4">
    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text-muted fw-semibold" style="font-size: 14px;">Total Kompetisi</span>
                <span class="material-symbols-outlined text-primary p-2 bg-primary-subtle rounded-3">event_note</span>
            </div>
            <h3 class="fw-bold mb-1" style="font-size: 28px; color: #0b1c30;"><?php echo e($totalKompetisi); ?></h3>
            <span class="text-muted small">Seluruh kompetisi terarsip</span>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text-muted fw-semibold" style="font-size: 14px;">Pendaftaran Aktif</span>
                <span class="material-symbols-outlined text-success p-2 bg-success-subtle rounded-3">cloud_done</span>
            </div>
            <h3 class="fw-bold mb-1" style="font-size: 28px; color: #0b1c30;"><?php echo e($pendaftaranAktif); ?></h3>
            <span class="text-success small fw-medium d-flex align-items-center gap-1">
                <span class="material-symbols-outlined fs-6">check_circle</span> Belum melewati deadline
            </span>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #316bf3; color: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text-white-50 fw-semibold" style="font-size: 14px;">Cakupan Wilayah</span>
                <span class="material-symbols-outlined text-white p-2 bg-white/20 rounded-3">public</span>
            </div>
            <h3 class="fw-bold mb-1" style="font-size: 28px;"><?php echo e($totalLevel); ?> Tingkat Level</h3>
            <span class="text-white-50 small">Universitas, Nasional, Internasional</span>
        </div>
    </div>
</div>

<div class="row g-4 mt-2">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px; background-color: #ffffff;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold m-0" style="font-size: 18px; color: #0b1c30;">Pembaruan Kompetisi Terkini</h5>
                <a href="<?php echo e(route('admin.lomba')); ?>" class="btn btn-light btn-sm text-primary fw-semibold px-3 rounded-2">Kelola Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-muted small">
                        <tr>
                            <th class="border-0 px-3 py-3">Nama Kompetisi</th>
                            <th class="border-0 py-3">Tingkat / Level</th>
                            <th class="border-0 py-3">Batas Waktu</th>
                            <th class="border-0 py-3 text-center">Status Waktu</th>
                        </tr>
                    </thead>
                    <tbody class="small">
                        <?php $__empty_1 = true; $__currentLoopData = $kompetisiTerkini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lomba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="px-3 py-3 fw-semibold">
                                <?php echo e($lomba->title); ?>

                                <span class="text-muted fw-normal d-block" style="font-size: 12px;">ID: COMP-<?php echo e($lomba->id); ?></span>
                            </td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary rounded-2 px-2 py-1">
                                    <?php echo e($lomba->level->name ?? 'Umum'); ?>

                                </span>
                            </td>
                            <td><?php echo e(\Carbon\Carbon::parse($lomba->deadline)->translatedFormat('d M Y')); ?></td>
                            <td class="text-center">
                                <?php if(\Carbon\Carbon::parse($lomba->deadline)->isFuture()): ?>
                                    <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-semibold">Aktif</span>
                                <?php else: ?>
                                    <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill fw-semibold">Selesai</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">Belum ada data kompetisi. Jalankan seeder terlebih dahulu!</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-3" style="font-size: 16px; color: #0b1c30;">Aksi Cepat</h5>
            <p class="text-muted small mb-3">Butuh mempublikasikan kompetisi IT baru ke mahasiswa? Klik tombol di bawah ini.</p>
            <a href="<?php echo e(route('admin.lomba.create')); ?>" class="btn btn-primary btn-sm w-100 py-2 fw-semibold d-flex align-items-center justify-content-center gap-2" style="border-radius: 8px; background-color: #316bf3; border: none;">
                <span class="material-symbols-outlined fs-5">add_circle</span> Tambah Kompetisi Baru
            </a>
        </div>
        
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-3" style="font-size: 16px; color: #0b1c30;">Rumpun Bidang</h5>
            <div class="d-flex flex-wrap gap-2">
                <?php $__empty_1 = true; $__currentLoopData = $semuaKategori ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <span class="badge bg-light text-dark border p-2"><?php echo e($kat->name); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <span class="badge bg-light text-muted border p-2">Belum ada kategori</span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Yudi\Documents\UAS Web\portal-lomba-ti\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>