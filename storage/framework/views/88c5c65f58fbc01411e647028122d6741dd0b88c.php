<?php /* /Users/tonychevalier/sites/simplon/heroku/tatoumi/resources/views/albums/index.blade.php */ ?>
<?php $__env->startSection('card'); ?>
    <?php $__env->startComponent('components.card'); ?>
        <?php $__env->slot('title'); ?>
            <?php echo app('translator')->getFromJson('Gestion des albums'); ?>
        <?php $__env->endSlot(); ?>
        <table class="table table-dark text-white">
            <tbody>
            <?php if($userAlbums->isEmpty()): ?>
                <p class="text-center"><?php echo app('translator')->getFromJson("Vous n'avez aucun album pour le moment"); ?></p>
            <?php else: ?>
                <?php $__currentLoopData = $userAlbums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($album->name); ?></td>
                        <td>
                            <a role="button" href="<?php echo e(route('album.destroy', $album->id)); ?>"
                               class="btn btn-danger btn-sm float-right invisible" data-toggle="tooltip"
                               title="<?php echo app('translator')->getFromJson("Supprimer l'album"); ?> <?php echo e($album->name); ?>"><i
                                        class="fas fa-trash fa-lg"></i></a>
                            <a role="button" href="<?php echo e(route('album.edit', $album->id)); ?>"
                               class="btn btn-warning btn-sm float-right mr-2 invisible" data-toggle="tooltip"
                               title="<?php echo app('translator')->getFromJson("Modifier l'album"); ?> <?php echo e($album->name); ?>"><i
                                        class="fas fa-edit fa-lg"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </tbody>
        </table>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(() => {
            $('a').removeClass('invisible')
        })
    </script>
    <?php echo $__env->make('partials.script-delete', ['text' => __('Vraiment supprimer cet album ?'), 'return' => 'removeTr'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>