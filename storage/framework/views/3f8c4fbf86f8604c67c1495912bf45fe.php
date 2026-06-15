<?php $__env->startSection('title', 'Pengaturan - Portal Lomba TI'); ?>
<?php $__env->startSection('header_title', 'Pengaturan Akun'); ?>
<?php $__env->startSection('header_subtitle', 'Kelola keamanan akun administrator Anda secara berkala.'); ?>

<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert" style="border-radius: 12px;">
    <div class="d-flex align-items-center gap-2">
        <span class="material-symbols-outlined fs-5">check_circle</span>
        <div><?php echo e(session('success')); ?></div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-4" style="font-size: 16px; color: #0b1c30;">Ganti Password Keamanan</h5>
            
            <form action="<?php echo e(route('admin.pengaturan.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">
                    <label class="form-label text-muted small fw-semibold">Password Saat Ini</label>
                    <input type="password" name="current_password" class="form-control" required style="border-radius: 8px;" placeholder="••••••••">
                </div>

                <div class="mb-3">
                    <label class="form-label text-muted small fw-semibold">Password Baru</label>
                    <input type="password" name="new_password" class="form-control" required style="border-radius: 8px;" placeholder="Minimal 8 karakter">
                </div>

                <div class="mb-4">
                    <label class="form-label text-muted small fw-semibold">Konfirmasi Password Baru</label>
                    <input type="password" name="new_password_confirmation" class="form-control" required style="border-radius: 8px;" placeholder="Ulangi password baru">
                </div>

                <button type="submit" class="btn btn-primary btn-sm px-4 py-2 fw-semibold" style="border-radius: 8px; background-color: #316bf3; border: none;">
                    Perbarui Password
                </button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Yudi\Documents\UAS Web\portal-lomba-ti\resources\views/admin/pengaturan.blade.php ENDPATH**/ ?>