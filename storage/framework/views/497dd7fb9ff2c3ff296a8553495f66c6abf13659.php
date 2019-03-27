<?php /* /Users/tonychevalier/sites/simplon/heroku/tatoumi/resources/views/images/albums.blade.php */ ?>
<?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="form-check">
        <label class="form-check-label">
            <input
                class="form-check-input"
                name="albums[]"
                value="<?php echo e($album->id); ?>"
                type="checkbox"
                <?php if($album->images->contains('id', $image->id)): ?> checked <?php endif; ?>
            >
            <?php echo e($album->name); ?>

        </label>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
