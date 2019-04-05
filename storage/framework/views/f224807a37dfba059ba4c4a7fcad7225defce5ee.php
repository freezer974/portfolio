<div class="form-group <?php echo e($class ?? ''); ?>">
    <label for="<?php echo e($name); ?>"><?php echo e($title); ?></label>
    <textarea class="form-control <?php echo e($errors->has($name) ? ' is-invalid' : ''); ?>" id="<?php echo e($name); ?>" rows="<?php echo e($rows ? $rows : '3'); ?>" placeholder="<?php echo e($placeholder ? $placeholder : ''); ?>" name="<?php echo e($name); ?>" min="3" max="1000" ><?php echo e(old($name, isset($value) ? $value : '')); ?></textarea>
    <?php if($errors->has($name)): ?>
        <div class="invalid-feedback">
            <?php echo e($errors->first($name)); ?>

        </div>
    <?php endif; ?>
</div>


<?php /* /Users/tonychevalier/sites/tatoumicreation/resources/views/partials/textarea-form-group.blade.php */ ?>