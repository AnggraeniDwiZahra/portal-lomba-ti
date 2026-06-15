

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['lomba']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['lomba']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="card h-100 lomba-card overflow-hidden">
    <div class="img-container">
        <?php if($lomba->poster): ?>
            <img src="<?php echo e(asset('storage/' . $lomba->poster)); ?>" alt="<?php echo e($lomba->title); ?>">
        <?php else: ?>
            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=500&q=80" alt="Default Poster">
        <?php endif; ?>
        
        <div class="card-badge">
            <?php if(\Carbon\Carbon::parse($lomba->deadline)->isFuture()): ?>
                <span class="spinner-grow spinner-grow-sm text-success" style="width: 6px; height: 6px; margin-right: 4px;"></span>
                <span class="text-success">Opened</span>
            <?php else: ?>
                <span class="text-danger">Closed</span>
            <?php endif; ?>
        </div>
    </div>
    <div class="card-body d-flex flex-column p-4">
        <div class="mb-2">
            <span class="badge bg-light text-primary border border-primary-subtle px-2 py-1" style="font-size: 11px;">
                <?php echo e($lomba->level->name ?? 'Umum'); ?>

            </span>
        </div>
        <h5 class="card-title fw-bold lh-base mb-4" style="font-size: 16px;">
            <a href="<?php echo e(route('lomba.detail', $lomba->id)); ?>" class="text-decoration-none text-dark hover-primary">
                <?php echo e($lomba->title); ?>

            </a>
        </h5>
        <div class="mt-auto">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <small class="text-muted d-flex align-items-center gap-1" style="font-size: 12px;">
                    <span class="material-symbols-outlined fs-6">event</span> Deadline:
                </small>
                <span class="fw-bold text-danger" style="font-size: 13px;">
                    <?php echo e(\Carbon\Carbon::parse($lomba->deadline)->translatedFormat('d M Y')); ?>

                </span>
            </div>
            <hr class="text-muted opacity-25 my-2">
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted" style="font-size: 12px;">Aksi: <span class="fw-semibold text-dark">Daftar Sekarang</span></small>
                <a href="<?php echo e($lomba->registration_link ?? '#'); ?>" target="_blank" class="btn btn-outline-primary rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Link Pendaftaran">
                    <span class="material-symbols-outlined" style="font-size: 18px;">link</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\portal-lomba-ti\resources\views/components/competition-card.blade.php ENDPATH**/ ?>