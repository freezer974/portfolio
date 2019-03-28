<?php /* /Users/tonychevalier/sites/simplon/heroku/tatoumi/resources/views/home.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <div class="site-wrapper">
        <div class="site-wrapper-inner text-white text-center">
            <i class="fas fa-spinner fa-pulse fa-4x"></i>
        </div>
    </div>
    <main class="container-fluid">
        <?php if(session('updated')): ?>
            <div class="alert alert-dark" role="alert">
                <?php echo e(session('updated')); ?>

            </div>
        <?php endif; ?>
        <?php if(isset($user)): ?>
            <h2 class="text-title mb-3"><?php echo e(__('Photos de ') . $user->name); ?></h2>
        <?php else: ?>
            <h2 class="text-title mb-3">Mes travaux
            <?php if(isset($category)): ?>
                • <span class="text-title mb-3 text-info"> <?php echo e($category->name); ?></span>
            <?php endif; ?>
            <?php if(isset($album)): ?>
            • <span class="text-title mb-3 text-info"> <?php echo e($album->name); ?> </span>
            <?php endif; ?>
            </h2>
        <?php endif; ?>


        <div class="d-flex justify-content-center">
            <?php echo e($images->links()); ?>

        </div>
        <div class="card-columns">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card <?php if($image->adult): ?> border-danger <?php endif; ?>" id="image<?php echo e($image->id); ?>">
                    <a href="<?php echo e(url('images/' . $image->name)); ?>" class="image-link" data-link="<?php echo e(route('image.click', $image->id)); ?>">
                        <img class="card-img-top"
                             src="<?php echo e(url('thumbs/' . $image->name)); ?>"
                             alt="image">
                    </a>
                    <?php if(isset($image->description)): ?>
                        <div class="card-body">

                            <p class="card-text">
                                <?php if(isset($image->title)): ?>
                                    <h4 class="text-dark"><?php echo e($image->title); ?></h4>
                                <?php endif; ?>
                                <?php echo e($image->description); ?>

                                <?php if(isset($image->url)): ?>
                                    <em class="d-block"><a href="<?php echo e($image->url); ?>">Site web</a></em>
                                <?php endif; ?>
                            </p>

                        </div>

                    <?php endif; ?>
                    <div class="card-footer text-muted">
                        <em>
                            <a href="<?php echo e(route('user', $image->user->id)); ?>" data-toggle="tooltip"
                                title="<?php echo e(__('Voir les photos de ') . $image->user->name); ?>"><?php echo e($image->user->name); ?></a>
                        </em>
                        <div class="float-right">
                            <em>
                                (<span class="image-click"><?php echo e($image->clicks); ?></span> <?php echo e(trans_choice(__('vue|vues'), $image->clicks)); ?>) <?php echo e($image->created_at->formatLocalized('%x')); ?>

                            </em>
                        </div>
                        <div class="star-rating" id="<?php echo e($image->id); ?>">
                            <span class="count-number">(<?php echo e($image->users->count()); ?>)</span>
                            <div id="<?php echo e($image->id . '.5'); ?>" data-toggle="tooltip" title="5" <?php if($image->rate > 4): ?> class="star-yellow" <?php endif; ?>>
                                <i class="fas fa-star"></i>
                            </div>
                            <div id="<?php echo e($image->id . '.4'); ?>" data-toggle="tooltip" title="4" <?php if($image->rate > 3): ?> class="star-yellow" <?php endif; ?>>
                                <i class="fas fa-star"></i>
                            </div>
                            <div id="<?php echo e($image->id . '.3'); ?>" data-toggle="tooltip" title="3" <?php if($image->rate > 2): ?> class="star-yellow" <?php endif; ?>>
                                <i class="fas fa-star"></i>
                            </div>
                            <div id="<?php echo e($image->id . '.2'); ?>" data-toggle="tooltip" title="2" <?php if($image->rate > 1): ?> class="star-yellow" <?php endif; ?>>
                                <i class="fas fa-star"></i>
                            </div>
                            <div id="<?php echo e($image->id . '.1'); ?>" data-toggle="tooltip" title="1" <?php if($image->rate > 0): ?> class="star-yellow" <?php endif; ?>>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="float-right">
                                <?php if (\Illuminate\Support\Facades\Blade::check('adminOrOwner', $image->user_id)): ?>
                                <a class="toggleIcons"
                                    href="#">
                                <i class="fa fa-cog"></i>
                                </a>
                                <span class="menuIcons" style="display: none">
                                    <a class="form-delete text-danger"
                                        href="<?php echo e(route('image.destroy', $image->id)); ?>"
                                        data-toggle="tooltip"
                                        title="<?php echo app('translator')->getFromJson('Supprimer cette photo'); ?>">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <a class="description-manage"
                                        href="<?php echo e(route('image.description', $image->id)); ?>"
                                        data-toggle="tooltip"
                                        title="<?php echo app('translator')->getFromJson('Gérer la description'); ?>">
                                        <i class="fa fa-comment"></i>
                                    </a>
                                    <a class="albums-manage"
                                        href="<?php echo e(route('image.albums', $image->id)); ?>"
                                        data-toggle="tooltip"
                                        title="<?php echo app('translator')->getFromJson('Gérer les albums'); ?>">
                                        <i class="fa fa-folder-open"></i>
                                    </a>
                                    <a class="category-edit"
                                        data-id="<?php echo e($image->category_id); ?>"
                                        href="<?php echo e(route('image.update', $image->id)); ?>"
                                        data-toggle="tooltip"
                                        title="<?php echo app('translator')->getFromJson('Changer de catégorie'); ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="adult-edit"
                                        href="<?php echo e(route('image.adult', $image->id)); ?>"
                                        data-toggle="tooltip"
                                        title="<?php echo app('translator')->getFromJson('Changer de statut'); ?>">
                                        <i class="fa <?php if($image->adult): ?> fa-graduation-cap <?php else: ?> fa-child <?php endif; ?>"></i>
                                    </a>
                                </span>
                                <form action="<?php echo e(route('image.destroy', $image->id)); ?>" method="POST" class="hide">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                </form>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="d-flex justify-content-center">
            <?php echo e($images->links()); ?>

        </div>
    </main>
    <div class="modal fade" id="changeDescription" tabindex="-1" role="dialog" aria-labelledby="descriptionLabel"
     aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="descriptionLabel"><?php echo app('translator')->getFromJson('Changement de la description'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="descriptionForm" action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="description" id="description">
                            <small class="invalid-feedback"></small>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->getFromJson('Envoyer'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="changeCategory" tabindex="-1" role="dialog" aria-labelledby="categoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryLabel"><?php echo app('translator')->getFromJson('Changement de la catégorie'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" action="" method="POST">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <select class="form-control" name="category_id">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->getFromJson('Envoyer'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editAlbums" tabindex="-1" role="dialog" aria-labelledby="albumLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="albumLabel"><?php echo app('translator')->getFromJson("Gestion des albums pour l'image"); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="manageAlbums" action="" method="POST">
                        <div class="form-group" id="listeAlbums"></div>
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->getFromJson('Envoyer'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        const swallAlertServer = () => {
                swal.fire({
                    title: '<?php echo app('translator')->getFromJson('Il semble y avoir une erreur sur le serveur, veuillez réessayer plus tard...'); ?>',
                    type: 'warning'
                })
            }
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        })
        $('a.description-manage').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            let text = that.parents('.card').find('.card-text').text()
            $('#description').val(text)
            $('#descriptionForm').attr('action', that.attr('href')).find('input').removeClass('is-invalid').next().text()
            $('#changeDescription').modal('show')
        })
        $('#descriptionForm').submit((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            $.ajax({
                method: 'put',
                url: that.attr('action'),
                data: that.serialize()
            })
            .done((data) => {
                let card = $('#image' + data.id)
                let body = card.find('.card-body')
                if(body.length) {
                    body.children().text(data.description)
                } else {
                    card.children('a').after('<div class="card-body"><p class="card-text">' + data.description + '</p></div>')
                }
                $('#changeDescription').modal('hide')
            })
            .fail((data) => {
                if(data.status === 422) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $('#descriptionForm input[name=' + key + ']').addClass('is-invalid').next().text(value)
                    })
                } else {
                    swallAlertServer()
                }
            })
        })
        $('a.category-edit').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            $('select').val(that.attr('data-id'))
            $('#editForm').attr('action', that.attr('href'))
            $('#changeCategory').modal('show')
        })
        $('a.adult-edit').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            let icon = that.children()
            let adult = icon.hasClass('fa-graduation-cap')
            if(adult) {
                icon.removeClass('fa-graduation-cap')
            } else {
                icon.removeClass('fa-child')
            }
            icon.addClass('fa-cog fa-spin')
            adult = !adult
            $.ajax({
                method: 'put',
                url: that.attr('href'),
                data: { adult: adult }
            })
            .done(() => {
                that.tooltip('hide')
                let icon = that.children()
                icon.removeClass('fa-cog fa-spin')
                let card = that.parents('.card')
                if(adult) {
                    icon.addClass('fa-graduation-cap')
                    card.addClass('border-danger')
                } else {
                    icon.addClass('fa-child')
                    card.removeClass('border-danger')
                }
            })
            .fail(() => {
                swallAlertServer()
            })
        })
        $('a.albums-manage').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            that.tooltip('hide')
            that.children().removeClass('fa-folder-open').addClass('fa-cog fa-spin')
            e.preventDefault()
            $.get(that.attr('href'))
            .done((data) => {
                that.children().addClass('fa-folder-open').removeClass('fa-cog fa-spin')
                $('#listeAlbums').html(data)
                $('#manageAlbums').attr('action', that.attr('href'))
                $('#editAlbums').modal('show')
            })
            .fail(() => {
                that.children().addClass('fa-folder-open').removeClass('fa-cog fa-spin')
                swallAlertServer()
            })
        })
        $('#manageAlbums').submit((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            $.ajax({
                method: 'put',
                url: that.attr('action'),
                data: that.serialize()
            })
                .done((data) => {
                    if(data === 'reload') {
                        location.reload();
                    } else {
                        $('#editAlbums').modal('hide')
                    }
                })
                .fail(() => {
                    swallAlertServer()
                })
        })

        let memoStars = []
        $('.star-rating div').click((e) => {
            <?php if(auth()->guard()->check()): ?>
                let element = $(e.currentTarget)
                let values = element.attr('id').split('.')
                element.addClass('fa-spin')
                $.ajax({
                    url: "<?php echo e(url('rating')); ?>" + '/' + values[0],
                    type: 'PUT',
                    data: {value: values[1]}
                })
                .done((data) => {
                    if (data.status === 'ok') {
                        let image = $('#' + data.id)
                        memoStars = []
                        image.children('div')
                            .removeClass('star-yellow')
                            .each(function (index, element) {
                                if (data.value > 4 - index) {
                                    $(element).addClass('star-yellow')
                                    memoStars.push(true)
                                }
                                memoStars.push(false)
                            })
                            .end()
                            .find('span.count-number')
                            .text('(' + data.count + ')')
                        if(data.rate) {
                            if(data.rate == values[1]) {
                                title = '<?php echo app('translator')->getFromJson("Vous avez déjà donné cette note !"); ?>'
                            } else {
                                title = '<?php echo app('translator')->getFromJson("Votre vote a été modifié !"); ?>'
                            }
                        } else {
                            title = '<?php echo app('translator')->getFromJson("Merci pour votre vote !"); ?>'
                        }
                        swal.fire({
                            title: title,
                            type: 'warning'
                        })
                    } else {
                        swal.fire({
                            title: '<?php echo app('translator')->getFromJson('Vous ne pouvez pas voter pour vos photos !'); ?>',
                            type: 'error'
                        })
                    }
                    element.removeClass('fa-spin')
                })
                .fail(() => {
                    swallAlertServer()
                    element.removeClass('fa-spin')
                })
            <?php else: ?>
                swal.fire({
                    title: '<?php echo app('translator')->getFromJson('Vous devez être connecté pour pouvoir voter !'); ?>',
                    type: 'error'
                })
            <?php endif; ?>
        })
        $('.star-rating').hover(
            (e) => {
                memoStars = []
                $(e.currentTarget).children('div')
                    .each((index, element) => {
                        memoStars.push($(element).hasClass('star-yellow'))
                    })
                    .removeClass('star-yellow')
            }, (e) => {
            $.each(memoStars, (index, value) => {
                if(value) {
                    $(e.currentTarget).children('div:eq(' + index + ')').addClass('star-yellow')
                }
            })
        })
        $('a.image-link').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            console.log(that)
            $.ajax({
                method: 'patch',
                url: that.attr('data-link')
            }).done((data) => {
                if(data.increment) {
                    let numberElement = that.siblings('div.card-footer').find('.image-click')
                    numberElement.text(parseInt(numberElement.text()) + 1)
                }
            })
        })

        $(document).ready(function() {
            $('.site-wrapper').fadeOut(1000)
            $('[data-toggle="tooltip"]').tooltip()
            $('.card-columns').magnificPopup({
                delegate: 'a.image-link',
                type: 'image',
                tClose: '<?php echo app('translator')->getFromJson("Fermer (Esc)"); ?>'<?php if($images->count() > 1): ?>,
                gallery: {
                    enabled: true,
                    tPrev: '<?php echo app('translator')->getFromJson("Précédent (Flèche gauche)"); ?>',
                    tNext: '<?php echo app('translator')->getFromJson("Suivant (Flèche droite)"); ?>'
                },
                callbacks: {
                    buildControls: function () {
                        this.contentContainer.append(this.arrowLeft.add(this.arrowRight))
                    }
                }<?php endif; ?>
            })
            $('a.toggleIcons').click((e) => {
                e.preventDefault();
                let that = $(e.currentTarget)
                that.next().toggle('slow').end().children().toggleClass('fa-cog').toggleClass('fa-play')
            })
            $('a.form-delete').click((e) => {
                e.preventDefault();
                let href = $(e.currentTarget).attr('href')
                swal.fire({
                    title: '<?php echo app('translator')->getFromJson('Vraiment supprimer cette photo ?'); ?>',
                    type: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: '<?php echo app('translator')->getFromJson('Oui'); ?>',
                    cancelButtonText: '<?php echo app('translator')->getFromJson('Non'); ?>'
                }).then((result) => {
                    if (result.value) {
                        $("form[action='" + href + "'").submit()
                    }
                })
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>