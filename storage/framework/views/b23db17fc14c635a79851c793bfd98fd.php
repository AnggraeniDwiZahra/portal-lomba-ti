<?php $__env->startSection('title', 'Edit Kompetisi - Portal Lomba TI'); ?>
<?php $__env->startSection('header_title', 'Edit Kompetisi IT'); ?>
<?php $__env->startSection('header_subtitle', 'Perbarui informasi atau batas waktu pendaftaran kompetisi.'); ?>

<?php $__env->startSection('content'); ?>
<div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background-color: #ffffff;">
    <div class="d-flex align-items-center mb-4">
        <a href="<?php echo e(route('admin.lomba')); ?>" class="btn btn-light btn-sm d-inline-flex p-2 rounded-2 me-3">
            <span class="material-symbols-outlined fs-5">arrow_back</span>
        </a>
        <h5 class="fw-bold m-0" style="font-size: 18px; color: #0b1c30;">Form Perbarui Data</h5>
    </div>

    <form action="<?php echo e(route('admin.lomba.update', $lomba->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> 
        <div class="row g-3">
            <div class="col-md-12">
                <label class="form-label text-muted small fw-semibold">Nama / Judul Kompetisi</label>
                <input type="text" name="title" class="form-control" value="<?php echo e($lomba->title); ?>" required style="border-radius: 8px;">
            </div>
            
            <div class="col-md-12">
                <label class="form-label text-muted small fw-semibold">Deskripsi Kompetisi</label>
                <textarea name="description" class="form-control" rows="4" required style="border-radius: 8px;"><?php echo e($lomba->description); ?></textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Kategori Bidang IT</label>
                <select name="category_id" class="form-select" required style="border-radius: 8px;">
                    <option value="" disabled>-- Pilih Kategori --</option>
                    <?php $__currentLoopData = $semuaKategori ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($kat->id); ?>" <?php echo e($lomba->category_id == $kat->id ? 'selected' : ''); ?>>
                            <?php echo e($kat->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Tingkat / Level Kompetisi</label>
                <select name="level_id" class="form-select" required style="border-radius: 8px;">
                    <option value="" disabled>-- Pilih Level --</option>
                    <?php $__currentLoopData = $semuaLevel ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lvl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($lvl->id); ?>" <?php echo e($lomba->level_id == $lvl->id ? 'selected' : ''); ?>>
                            <?php echo e($lvl->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Link Pendaftaran Eksternal</label>
                <input type="url" name="registration_link" class="form-control" value="<?php echo e($lomba->registration_link); ?>" required style="border-radius: 8px;">
            </div>

            <div class="col-md-6">
                <label class="form-label text-muted small fw-semibold">Batas Akhir Pendaftaran (Deadline)</label>
                <input type="date" name="deadline" class="form-control" value="<?php echo e(\Carbon\Carbon::parse($lomba->deadline)->format('Y-m-d')); ?>" required style="border-radius: 8px;">
            </div>

            <div class="col-md-12">
                <label class="form-label text-muted small fw-semibold">Banner / Poster Lomba Baru <span class="text-secondary fw-normal">(Biarkan kosong jika tidak diganti)</span></label>
                <input type="file" name="poster" class="form-control" accept="image/*" style="border-radius: 8px;">
                <?php if($lomba->poster): ?>
                    <small class="text-primary d-block mt-1">Poster saat ini: <?php echo e($lomba->poster); ?></small>
                <?php endif; ?>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="<?php echo e(route('admin.lomba')); ?>" class="btn btn-light px-4 fw-semibold" style="border-radius: 8px;">Batal</a>
            <button type="submit" class="btn btn-primary px-4 fw-semibold" style="border-radius: 8px; background-color: #316bf3; border: none;">Simpan Perubahan</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Yudi\Documents\UAS Web\portal-lomba-ti\resources\views/admin/lomba/edit.blade.php ENDPATH**/ ?>