<?php

namespace App\Providers;

use App\Repositories\AlbumRepository;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->admin;
        });

        if (request ()->server ("SCRIPT_NAME") !== 'artisan') {
            view ()->share ('categories', resolve(CategoryRepository::class)->getAll());
            view ()->composer('layouts.app', function ($view)
            {
                if(auth()->check()) {
                    $albums = resolve (AlbumRepository::class)->getByUser(auth()->id());
                    if($albums->isNotEmpty()) {
                        $view->with('albums', $albums);
                    }
                }
            });
        }

        Blade::if ('adminOrOwner', function ($id) {
            return auth ()->check () && (auth ()->id () === $id || auth ()->user ()->admin);
        });

        Blade::if ('maintenance', function () {
            return auth ()->check () && auth ()->user ()->admin && app()->isDownForMaintenance();
        });

        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');
    }
}
