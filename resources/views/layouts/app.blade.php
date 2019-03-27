<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Album') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="{{ route('home') }}" title="{{ config('app.name', 'Album') }}"><img src="{!! asset('images/logo/logo-tatoumi-creation.png') !!}" alt="" class="logo-navbar mb-2 js-scroll-trigger"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @if(currentRoute(route('home')))
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#about">À propos</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#service">Services</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#testimonial">Témoignages</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
            @endif
            @isset($category)
                @if(currentRoute(route('all')))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle
                                {{ currentRoute(route('category', $category->slug)) }}
                                " href="#" id="navbarDropdownCat" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('Catégories')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownCat">
                            @foreach($categories as $category)
                                <a class="dropdown-item" href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </li>
                @endif
            @endisset

            @isset($albums)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
                        @isset($album)
                            {{ currentRoute(route('album', $album->slug))}}
                        @endisset
                        " href="#" id="navbarDropdownAlbum" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('Albums')
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownAlbum">
                        @foreach($albums as $album)
                            <a class="dropdown-item"
                            href="{{ route('album', $album->slug) }}">{{ $album->name }}</a>
                        @endforeach
                    </div>
                </li>
            @endisset
            @admin
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ currentRoute(
                                        route('category.create'),
                                        route('category.index'),
                                        route('category.edit', request()->category?: 0),
                                        route('orphans.index'),
                                        route('maintenance.index'),
                                        route('user.index')
                                    )}}" href="#" id="navbarDropdownGestCat" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @lang('Administration')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownGestCat">
                    <a class="dropdown-item" href="{{ route('category.create') }}">
                        <i class="fas fa-plus fa-lg"></i> @lang('Ajouter une catégorie')
                    </a>
                    <a class="dropdown-item" href="{{ route('category.index') }}">
                        <i class="fas fa-wrench fa-lg"></i> @lang('Gérer les catégories')
                    </a>
                    <a class="dropdown-item" href="{{ route('orphans.index') }}">
                        <i class="fas fa-images fa-lg"></i> @lang('Photos orphelines')
                    </a>
                    <a class="dropdown-item" href="{{ route('maintenance.index') }}">
                        <i class="fas fa-cogs fa-lg"></i> @lang('Mode maintenance')
                    </a>
                    <a class="dropdown-item" href="{{ route('user.index') }}">
                        <i class="fas fa-users fa-lg"></i> @lang('Utilisateurs')
                    </a>
                </div>
            </li>
            @endadmin
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle{{ currentRoute(
                                        route('album.create'),
                                        route('image.create'),
                                        route('album.index')
                                    )}}"
                    href="#" id="navbarDropdownGestAlbum" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                        @lang('Gestion')
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownGestAlbum">
                        <a class="dropdown-item" href="{{ route('image.create') }}">
                            <i class="fas fa-images fa-lg"></i> @lang('Ajouter une image')
                        </a>
                        <a class="dropdown-item" href="{{ route('album.create') }}">
                            <i class="fas fa-folder-open fa-lg"></i> @lang('Ajouter un album')
                        </a>
                        <a class="dropdown-item" href="{{ route('album.index') }}">
                            <i class="fas fa-wrench fa-lg"></i> @lang('Gérer les albums')
                        </a>
                    </div>
                </li>
            @endauth
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="#" id="navbarDropdownFlag" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img width="18" height="18" alt="{{ session('locale') }}"
                            src="{!! asset('images/flags/' . session('locale') . '-flag.png') !!}"/>
                </a>
                <div id="flags" class="dropdown-menu" aria-labelledby="navbarDropdownFlag">
                    @foreach(config('app.locales') as $locale)
                        @if($locale != session('locale'))
                            <a class="dropdown-item" href="{{ route('language', $locale) }}">
                                <img width="18" height="18" alt="{{ session('locale') }}"
                                        src="{!! asset('images/flags/' . $locale . '-flag.png') !!}"/>
                            </a>
                        @endif
                    @endforeach
                </div>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/tonychevalier974"><i class="fab fa-facebook-f fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/ChevalierTony"><i class="fab fa-twitter fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/tonychevalier974/"> <i class="fab fa-linkedin-in fa-lg"></i></a>
                </li>
            @else
                @maintenance
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('maintenance.index') }}" data-toggle="tooltip" title="@lang('Mode maintenance')">
                            <span class="fas fa-exclamation-circle  fa-lg" style="color: red;">
                            </span>
                        </a>
                    </li>
                @endmaintenance
                @unless(auth()->user()->unreadNotifications->isEmpty())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('notification.index') }}">
                            <span class="fa-layers fa-fw">
                                <span style="color: yellow" class="fas fa-bell fa-lg" data-fa-transform="grow-2"></span>
                                <span class="fa-layers-text fa-inverse" data-fa-transform="shrink-4 up-2 left-1" style="color: black; font-weight:900">{{ auth()->user()->unreadNotifications->count() }}</span>
                            </span>
                        </a>
                    </li>
                @endunless
                    <li class="nav-item{{ currentRoute(
                            route('profile.edit', auth()->id()),
                            route('profile.show', auth()->id())
                        )}}">
                    <a class="nav-link" href="{{ route('profile.edit', auth()->id()) }}">@lang('Profil')</a>
                </li>
                <li class="nav-item">
                    <a id="logout" class="nav-link" href="{{ route('logout') }}">@lang('Déconnexion')</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>
@if (session('ok'))
    <div class="container">
        <div class="alert alert-dismissible alert-success fade show" role="alert">
            {{ session('ok') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif
@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
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
