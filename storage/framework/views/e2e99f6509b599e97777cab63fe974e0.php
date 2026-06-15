<?php $__env->startSection('title', 'Kelola Kategori - Portal Lomba TI'); ?>
<?php $__env->startSection('header_title', 'Manajemen Kategori'); ?>
<?php $__env->startSection('header_subtitle', 'Atur rumpun bidang kompetisi IT yang tersedia di platform.'); ?>

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
    <div class="col-md-4">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-3" style="font-size: 16px; color: #0b1c30;">Tambah Kategori</h5>
            <form action="<?php echo e(route('admin.kategori.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label text-muted small fw-semibold">Nama Kategori</label>
                    <input type="text" name="name" class="form-control" placeholder="Contoh: Cyber Security" required style="border-radius: 8px;">
                </div>
                <button type="submit" class="btn btn-primary btn-sm w-100 py-2 fw-semibold" style="border-radius: 8px; background-color: #316bf3; border: none;">
                    Simpan Kategori
                </button>
            </form>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
            <h5 class="fw-bold mb-4" style="font-size: 16px; color: #0b1c30;">Daftar Kategori Saat Ini</h5>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-muted small">
                        <tr>
                            <th class="border-0 px-3 py-3" style="width: 15%;">ID</th>
                            <th class="border-0 py-3">Nama Kategori Rumpun</th>
                            <th class="border-0 py-3 text-center" style="width: 25%;">Aksi Kontrol</th>
                        </tr>
                    </thead>
                    <tbody class="small">
                        <?php $__empty_1 = true; $__currentLoopData = $semuaKategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="px-3 py-3 text-muted">#<?php echo e($kat->id); ?></td>
                            <td class="fw-semibold" style="color: #0b1c30;"><?php echo e($kat->name); ?></td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="<?php echo e(route('admin.kategori.edit', $kat->id)); ?>" class="btn btn-sm btn-light text-primary p-2 d-inline-flex rounded-2" title="Edit Kategori">
                                        <span class="material-symbols-outlined fs-5">edit</span>
                                    </a>
                                    
                                    <form action="<?php echo e(route('admin.kategori.destroy', $kat->id)); ?>" method="POST" onsubmit="return confirm('Hapus kategori ini? Lomba dengan kategori ini mungkin akan terpengaruh.');" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-light text-danger p-2 d-inline-flex rounded-2" title="Hapus Kategori">
                                            <span class="material-symbols-outlined fs-5">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="3" class="text-center text-muted py-4">Belum ada data kategori</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Yudi\Documents\UAS Web\portal-lomba-ti\resources\views/admin/kategori.blade.php ENDPATH**/ ?>