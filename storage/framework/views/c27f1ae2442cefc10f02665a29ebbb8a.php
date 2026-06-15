<?php $__env->startSection('title', 'Profil Saya'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="mb-4">
                <h3 class="fw-bold text-dark mb-1">Pengaturan Profil</h3>
                <p class="text-muted small">Kelola informasi akun dan perbarui foto profil Anda.</p>
            </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show rounded-3 mb-3 small" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

            <form action="<?php echo e(route('peserta.profil.update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="card border-0 shadow-sm rounded-4 p-4 bg-white mb-4">
                    <div class="row g-4">
                        
                        <div class="col-12 text-center text-md-start d-md-flex align-items-center gap-4 border-bottom pb-4">
                            <div class="position-relative d-inline-block mb-3 mb-md-0">
                                <div id="avatar-wrapper" class="rounded-circle bg-primary-subtle d-flex align-items-center justify-content-center border border-4 border-light shadow-sm overflow-hidden" style="width: 100px; height: 100px; cursor: pointer;" title="Klik untuk ganti foto">
                                    <?php if(Auth::user()->profile_photo): ?>
                                        <img id="avatar-preview" src="<?php echo e(asset('storage/' . Auth::user()->profile_photo)); ?>" alt="Foto Profil" class="w-100 h-100 object-fit-cover">
                                    <?php else: ?>
                                        <img id="avatar-preview" src="" alt="Foto Profil" class="w-100 h-100 object-fit-cover" style="display: none;">
                                        <span id="avatar-icon" class="material-symbols-outlined text-primary" style="font-size: 60px; font-variation-settings: 'FILL' 1;">account_circle</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Foto Profil</h6>
                                <p class="text-muted small mb-2">Pilih foto terbaik Anda dengan format JPG, JPEG, PNG, atau WEBP (maks. 2MB).</p>
                                <input type="file" 
                                       name="profile_photo" 
                                       id="profile-photo-input"
                                       accept=".jpg,.jpeg,.png,.webp"
                                       class="form-control form-control-sm rounded-3 <?php $__errorArgs = ['profile_photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       style="max-width: 300px;">
                                <?php $__errorArgs = ['profile_photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback small"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div id="photo-error" class="text-danger small mt-1" style="display: none;"></div>
                            </div>
                        </div>

                        <div class="col-12">
                            <h5 class="fw-bold text-primary mb-1">Informasi Dasar</h5>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold small text-secondary">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control py-2.5 rounded-3 border-secondary-subtle <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name', Auth::user()->name)); ?>" required>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback small"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold small text-secondary">Alamat Email</label>
                            <input type="email" class="form-control py-2.5 rounded-3 border-secondary-subtle bg-light text-muted" value="<?php echo e(Auth::user()->email); ?>" readonly>
                            <div class="form-text text-xs text-muted mt-1">Email digunakan untuk identifikasi akun dan tidak dapat diubah.</div>
                        </div>

                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4 py-2 rounded-3 fw-bold shadow-sm">
                        Simpan Perubahan
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('profile-photo-input');
        const preview = document.getElementById('avatar-preview');
        const icon = document.getElementById('avatar-icon');
        const errorDiv = document.getElementById('photo-error');
        const allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
        const maxSize = 2 * 1024 * 1024; // 2MB

        input.addEventListener('change', function (e) {
            const file = e.target.files[0];
            errorDiv.style.display = 'none';
            errorDiv.textContent = '';

            if (!file) return;

            // Validasi tipe file
            if (!allowedTypes.includes(file.type)) {
                errorDiv.textContent = 'Format file tidak didukung. Gunakan JPG, JPEG, PNG, atau WEBP.';
                errorDiv.style.display = 'block';
                input.value = '';
                return;
            }

            // Validasi ukuran file
            if (file.size > maxSize) {
                errorDiv.textContent = 'Ukuran file terlalu besar. Maksimal 2MB.';
                errorDiv.style.display = 'block';
                input.value = '';
                return;
            }

            // Live preview menggunakan FileReader
            const reader = new FileReader();
            reader.onload = function (event) {
                preview.src = event.target.result;
                preview.style.display = 'block';

                // Sembunyikan ikon default jika ada
                if (icon) {
                    icon.style.display = 'none';
                }
            };
            reader.readAsDataURL(file);
        });

        // Klik avatar untuk membuka file picker
        document.getElementById('avatar-wrapper').addEventListener('click', function () {
            input.click();
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('peserta.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Yudi\Documents\UAS Web\portal-lomba-ti\resources\views/peserta/profil.blade.php ENDPATH**/ ?>