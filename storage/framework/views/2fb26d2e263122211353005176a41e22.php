<?php $__env->startSection('title', 'Kelola Pengguna - Portal Lomba TI'); ?>
<?php $__env->startSection('header_title', 'Manajemen Pengguna'); ?>
<?php $__env->startSection('header_subtitle', 'Pantau akun pengguna, hak akses, dan peran (role) sistem.'); ?>

<?php $__env->startSection('content'); ?>
<div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold m-0" style="font-size: 16px; color: #0b1c30;">Daftar Akun Terdaftar</h5>
        <span class="badge bg-light text-dark border px-3 py-2" style="border-radius: 8px;">
            Total: <?php echo e($semuaPengguna->count()); ?> Pengguna
        </span>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light text-muted small">
                <tr>
                    <th class="border-0 px-3 py-3">Nama Pengguna</th>
                    <th class="border-0 py-3">Alamat Email</th>
                    <th class="border-0 py-3 text-center">Peran (Role)</th>
                    <th class="border-0 py-3 text-center">Tanggal Bergabung</th>
                </tr>
            </thead>
            <tbody class="small">
                <?php $__empty_1 = true; $__currentLoopData = $semuaPengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-3 py-3 d-flex align-items-center gap-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary text-white fw-bold rounded-circle" style="width: 36px; height: 36px; font-size: 14px;">
                            <?php echo e(strtoupper(substr($user->name, 0, 1))); ?>

                        </div>
                        <div>
                            <span class="fw-semibold d-block text-dark"><?php echo e($user->name); ?></span>
                            <span class="text-muted" style="font-size: 11px;">UID: USER-<?php echo e($user->id); ?></span>
                        </div>
                        <div class="text-muted">
    Terakhir diperbarui: 
    <?php echo e($terakhirDiperbarui ? \Carbon\Carbon::parse($terakhirDiperbarui)->diffForHumans() : 'Belum ada data'); ?>

</div>
                    </td>
                    
                    <td><?php echo e($user->email); ?></td>
                    
                    <td class="text-center">
                        <?php if($user->role == 'admin'): ?>
                            <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-3 fw-semibold">Admin Sistem</span>
                        <?php else: ?>
                            <span class="badge bg-info-subtle text-info px-3 py-2 rounded-3 fw-semibold">Mahasiswa</span>
                        <?php endif; ?>
                    </td>
                    
                    <td class="text-center text-muted">
                        <?php echo e($user->created_at ? $user->created_at->translatedFormat('d M Y') : '-'); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center text-muted py-5">
                        <span class="material-symbols-outlined fs-1 d-block mb-2 text-secondary">group_off</span>
                        Belum ada data pengguna yang terdaftar di database.
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Yudi\Documents\UAS Web\portal-lomba-ti\resources\views/admin/pengguna.blade.php ENDPATH**/ ?>