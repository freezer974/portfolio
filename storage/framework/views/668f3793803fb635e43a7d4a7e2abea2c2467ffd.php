<?php /* /Users/tonychevalier/sites/simplon/heroku/tatoumi/resources/views/layouts/form.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo $__env->yieldContent('card'); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>