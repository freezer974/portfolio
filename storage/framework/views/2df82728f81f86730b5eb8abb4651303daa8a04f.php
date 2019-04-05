<button type="submit" class="btn <?php if(isset($color)): ?><?php echo e(' btn-' . $color); ?><?php else: ?> btn-primary <?php endif; ?>
    <?php echo e($right ?? ''); ?> <?php echo e($col ?? ''); ?> ">
    <?php echo e($slot); ?>

</button>

<?php /* /Users/tonychevalier/sites/tatoumicreation/resources/views/components/button.blade.php */ ?>