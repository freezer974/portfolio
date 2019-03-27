<?php /* /Users/tonychevalier/sites/simplon/heroku/tatoumi/resources/views/layouts/app.blade.php */ ?>
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Album')); ?></title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>" title="<?php echo e(config('app.name', 'Album')); ?>"><img src="<?php echo asset('images/logo/logo-tatoumi-creation.png'); ?>" alt="" class="logo-navbar mb-2 js-scroll-trigger"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if(currentRoute(route('home'))): ?>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#about">À propos</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#service">Services</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#testimonial">Témoignages</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
            <?php endif; ?>
            <?php if(isset($category)): ?>
                <?php if(currentRoute(route('all'))): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle
                                <?php echo e(currentRoute(route('category', $category->slug))); ?>

                                " href="#" id="navbarDropdownCat" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo app('translator')->getFromJson('Catégories'); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownCat">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="dropdown-item" href="<?php echo e(route('category', $category->slug)); ?>"><?php echo e($category->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endif; ?>

            <?php if(isset($albums)): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
                        <?php if(isset($album)): ?>
                            <?php echo e(currentRoute(route('album', $album->slug))); ?>

                        <?php endif; ?>
                        " href="#" id="navbarDropdownAlbum" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo app('translator')->getFromJson('Albums'); ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownAlbum">
                        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item"
                            href="<?php echo e(route('album', $album->slug)); ?>"><?php echo e($album->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </li>
            <?php endif; ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle<?php echo e(currentRoute(
                                        route('category.create'),
                                        route('category.index'),
                                        route('category.edit', request()->category?: 0),
                                        route('orphans.index'),
                                        route('maintenance.index'),
                                        route('user.index')
                                    )); ?>" href="#" id="navbarDropdownGestCat" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php echo app('translator')->getFromJson('Administration'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownGestCat">
                    <a class="dropdown-item" href="<?php echo e(route('category.create')); ?>">
                        <i class="fas fa-plus fa-lg"></i> <?php echo app('translator')->getFromJson('Ajouter une catégorie'); ?>
                    </a>
                    <a class="dropdown-item" href="<?php echo e(route('category.index')); ?>">
                        <i class="fas fa-wrench fa-lg"></i> <?php echo app('translator')->getFromJson('Gérer les catégories'); ?>
                    </a>
                    <a class="dropdown-item" href="<?php echo e(route('orphans.index')); ?>">
                        <i class="fas fa-images fa-lg"></i> <?php echo app('translator')->getFromJson('Photos orphelines'); ?>
                    </a>
                    <a class="dropdown-item" href="<?php echo e(route('maintenance.index')); ?>">
                        <i class="fas fa-cogs fa-lg"></i> <?php echo app('translator')->getFromJson('Mode maintenance'); ?>
                    </a>
                    <a class="dropdown-item" href="<?php echo e(route('user.index')); ?>">
                        <i class="fas fa-users fa-lg"></i> <?php echo app('translator')->getFromJson('Utilisateurs'); ?>
                    </a>
                </div>
            </li>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle<?php echo e(currentRoute(
                                        route('album.create'),
                                        route('image.create'),
                                        route('album.index')
                                    )); ?>"
                    href="#" id="navbarDropdownGestAlbum" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                        <?php echo app('translator')->getFromJson('Gestion'); ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownGestAlbum">
                        <a class="dropdown-item" href="<?php echo e(route('image.create')); ?>">
                            <i class="fas fa-images fa-lg"></i> <?php echo app('translator')->getFromJson('Ajouter une image'); ?>
                        </a>
                        <a class="dropdown-item" href="<?php echo e(route('album.create')); ?>">
                            <i class="fas fa-folder-open fa-lg"></i> <?php echo app('translator')->getFromJson('Ajouter un album'); ?>
                        </a>
                        <a class="dropdown-item" href="<?php echo e(route('album.index')); ?>">
                            <i class="fas fa-wrench fa-lg"></i> <?php echo app('translator')->getFromJson('Gérer les albums'); ?>
                        </a>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="#" id="navbarDropdownFlag" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img width="18" height="18" alt="<?php echo e(session('locale')); ?>"
                            src="<?php echo asset('images/flags/' . session('locale') . '-flag.png'); ?>"/>
                </a>
                <div id="flags" class="dropdown-menu" aria-labelledby="navbarDropdownFlag">
                    <?php $__currentLoopData = config('app.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($locale != session('locale')): ?>
                            <a class="dropdown-item" href="<?php echo e(route('language', $locale)); ?>">
                                <img width="18" height="18" alt="<?php echo e(session('locale')); ?>"
                                        src="<?php echo asset('images/flags/' . $locale . '-flag.png'); ?>"/>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </li>
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/tonychevalier974"><i class="fab fa-facebook-f fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/ChevalierTony"><i class="fab fa-twitter fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/tonychevalier974/"> <i class="fab fa-linkedin-in fa-lg"></i></a>
                </li>
            <?php else: ?>
                <?php if (\Illuminate\Support\Facades\Blade::check('maintenance')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('maintenance.index')); ?>" data-toggle="tooltip" title="<?php echo app('translator')->getFromJson('Mode maintenance'); ?>">
                            <span class="fas fa-exclamation-circle  fa-lg" style="color: red;">
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (! (auth()->user()->unreadNotifications->isEmpty())): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('notification.index')); ?>">
                            <span class="fa-layers fa-fw">
                                <span style="color: yellow" class="fas fa-bell fa-lg" data-fa-transform="grow-2"></span>
                                <span class="fa-layers-text fa-inverse" data-fa-transform="shrink-4 up-2 left-1" style="color: black; font-weight:900"><?php echo e(auth()->user()->unreadNotifications->count()); ?></span>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                    <li class="nav-item<?php echo e(currentRoute(
                            route('profile.edit', auth()->id()),
                            route('profile.show', auth()->id())
                        )); ?>">
                    <a class="nav-link" href="<?php echo e(route('profile.edit', auth()->id())); ?>"><?php echo app('translator')->getFromJson('Profil'); ?></a>
                </li>
                <li class="nav-item">
                    <a id="logout" class="nav-link" href="<?php echo e(route('logout')); ?>"><?php echo app('translator')->getFromJson('Déconnexion'); ?></a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hide">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<?php if(session('ok')): ?>
    <div class="container">
        <div class="alert alert-dismissible alert-success fade show" role="alert">
            <?php echo e(session('ok')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php endif; ?>
<?php echo $__env->yieldContent('content'); ?>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
<script>
    $(() => {
        $('#logout').click((e) => {
            e.preventDefault()
            $('#logout-form').submit()
        })

        $('[data-toggle="tooltip"]').tooltip()
    })


    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 15) {
            $("nav.navbar").removeClass("scroll-header");
        } else {
            $("nav.navbar").addClass("scroll-header");
        }
    });

</script>
</body>
</html>
