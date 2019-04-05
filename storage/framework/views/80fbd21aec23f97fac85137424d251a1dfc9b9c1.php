<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;margin: 10px" >
    <div style="position: absolute; <?php echo e(config('laravel-bootstrap-toasts.position_x','right')); ?>: 0; <?php echo e(config('laravel-bootstrap-toasts.position_y','top')); ?>: 0;">
        <?php $__currentLoopData = session('toasts', collect())->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000"
                 <?php if(!$toast['autohide']): ?> data-autohide="false" <?php endif; ?>>
                <?php if($toast["title"] ): ?>
                    <div class="toast-header">
                        <strong class="mr-auto"><?php echo e($toast['title']); ?></strong>
                        <?php if(!$toast['autohide']): ?>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <?php if(!$toast['autohide']): ?>
                        <div>
                            <button type="button" class="ml-2 mr-1 mb-1 close text-light" data-dismiss="toast"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <div class="toast-body bg-<?php echo e($toast['level']); ?> text-light">
                    <?php echo $toast['message']; ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>

<script>
    $('.toast').toast().toast("show");
</script>

<?php echo e(session()->forget('toasts')); ?>


<?php /* /Users/tonychevalier/sites/tatoumicreation/vendor/whereislucas/laravel-bootstrap-toasts/src/WhereIsLucas/LaravelBootstrapToasts/../../views/message.blade.php */ ?>