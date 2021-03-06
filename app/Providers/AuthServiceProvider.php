<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Album;
use App\Models\Image;
use App\Policies\UserPolicy;
use App\Policies\AlbumPolicy;
use App\Policies\ImagePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Image::class => ImagePolicy::class,
        User::class => UserPolicy::class,
        Album::class => AlbumPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
