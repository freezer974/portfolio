<?php /* /Users/tonychevalier/sites/simplon/heroku/tatoumi/resources/views/users/index.blade.php */ ?>
<?php $__env->startSection('css'); ?>
    <style>
        .fa-check { color: green; }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('card'); ?>
    <?php $__env->startComponent('components.card'); ?>
        <?php $__env->slot('title'); ?>
            <?php echo app('translator')->getFromJson('Gestion des utilisateurs (administrateurs en rouge)'); ?>
        <?php $__env->endSlot(); ?>
        <div class="table-responsive">
            <table class="table table-dark text-white">
                <thead>
                    <tr>
                        <th scope="col"><?php echo app('translator')->getFromJson('Nom'); ?></th>
                        <th scope="col"><?php echo app('translator')->getFromJson('Email'); ?></th>
                        <th scope="col"><?php echo app('translator')->getFromJson('Inscription'); ?></th>
                        <th scope="col"><?php echo app('translator')->getFromJson('Vérifié'); ?></th>
                        <th scope="col"><?php echo app('translator')->getFromJson('Adulte'); ?></th>
                        <th scope="col"><?php echo app('translator')->getFromJson('Photos'); ?></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr <?php if($user->admin): ?> style="color: red" <?php endif; ?>>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->created_at->formatLocalized('%x')); ?></td>
                        <td><?php if($user->email_verified_at): ?><?php echo e($user->email_verified_at->formatLocalized('%x')); ?><?php endif; ?></td>
                        <td><?php if($user->adult): ?><i class="fas fa-check fa-lg"></i><?php endif; ?></td>
                        <td><?php echo e($user->images_count); ?></td>
                        <td>
                            <a role="button" href="<?php echo e(route('user.edit', $user->id)); ?>"
                               class="btn btn-warning btn-sm float-right mr-2 invisible" data-toggle="tooltip"
                               title="<?php echo app('translator')->getFromJson("Modifier l'utilisateur"); ?> <?php echo e($user->name); ?>"><i
                                        class="fas fa-edit fa-lg"></i></a>
                        </td>
                        <td>
                            <?php if (! ($user->admin)): ?>
                            <a role="button" href="<?php echo e(route('user.destroy', $user->id)); ?>"
                               class="btn btn-danger btn-sm float-right invisible" data-toggle="tooltip"
                               title="<?php echo app('translator')->getFromJson("Supprimer l'utilisateur"); ?> <?php echo e($user->name); ?>"><i
                                        class="fas fa-trash fa-lg"></i></a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(() => {
            $('a').removeClass('invisible')
        })
    </script>
    <?php echo $__env->make('partials.script-delete', ['text' => __('Vraiment supprimer cet utilisateur ?'), 'return' => 'removeTr'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form-wide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>