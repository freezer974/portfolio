<?php /* /Users/tonychevalier/sites/simplon/heroku/tatoumi/resources/views/components/checkbox.blade.php */ ?>
<div class="form-group">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" <?php if($checked): ?> checked <?php endif; ?>>
        <label class="custom-control-label" for="<?php echo e($name); ?>"> <?php echo e($label); ?></label>
    </div>
</div>
