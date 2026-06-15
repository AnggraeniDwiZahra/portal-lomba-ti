<?php $__env->startSection('title', 'Katalog Lomba - Portal Lomba TI'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .lomba-card {
        border: 1px solid rgba(198, 198, 205, 0.3);
        border-radius: 20px;
        background: #fff;
        transition: all 0.3s ease;
    }
    .lomba-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0,0,0,0.05);
    }
    .img-container {
        position: relative;
        width: 100%;
        height: 180px; 
        overflow: hidden;
    }
    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .card-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        z-index: 10;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(4px);
        padding: 4px 10px;
        border-radius: 30px;
        font-size: 11px;
        font-weight: 600;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        display: inline-flex;
        align-items: center;
        width: auto;
    }
    
    /* Tombol Kategori */
    .btn-category-active {
        background-color: #0051d5;
        color: #fff;
        border-color: #0051d5;
    }
    
    /* Hover link judul */
    .hover-primary:hover {
        color: #0051d5 !important;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2 class="fw-bold text-dark mb-2">Jelajahi Semua Kompetisi</h2>
            <p class="text-muted mb-md-0">Saring dan temukan kompetisi TI terbaik untuk mengasah skill-mu.</p>
        </div>
    </div>

    <div class="d-flex flex-wrap gap-2 mb-5">
        <a href="<?php echo e(route('lomba.index')); ?>" 
           class="btn <?php echo e(!request('category_id') ? 'btn-category-active' : 'btn-outline-secondary'); ?> rounded-pill px-4 py-2" 
           style="font-size: 14px;">
           Semua Lomba
        </a>

        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('lomba.index', ['category_id' => $category->id])); ?>" 
           class="btn <?php echo e(request('category_id') == $category->id ? 'btn-category-active' : 'btn-outline-secondary'); ?> rounded-pill px-4 py-2 d-flex align-items-center gap-2" 
           style="font-size: 14px;">
            <span class="material-symbols-outlined fs-5">category</span> 
            <?php echo e($category->name); ?>

        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="row g-4">
        <?php $__empty_1 = true; $__currentLoopData = $listLomba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lomba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-6 col-lg-4">
            <?php if (isset($component)) { $__componentOriginal8026d00b13602e6faac6ec508056ae26 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8026d00b13602e6faac6ec508056ae26 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.competition-card','data' => ['lomba' => $lomba]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('competition-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lomba' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($lomba)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8026d00b13602e6faac6ec508056ae26)): ?>
<?php $attributes = $__attributesOriginal8026d00b13602e6faac6ec508056ae26; ?>
<?php unset($__attributesOriginal8026d00b13602e6faac6ec508056ae26); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8026d00b13602e6faac6ec508056ae26)): ?>
<?php $component = $__componentOriginal8026d00b13602e6faac6ec508056ae26; ?>
<?php unset($__componentOriginal8026d00b13602e6faac6ec508056ae26); ?>
<?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="col-12 text-center py-5">
            <h4 class="text-muted">Belum ada lomba di kategori ini</h4>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portal-lomba-ti\resources\views/lomba/index.blade.php ENDPATH**/ ?>