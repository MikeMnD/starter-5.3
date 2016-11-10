<?php

namespace App\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $providers = [
        DevelopmentServiceProvider::class,
        \Administr\Providers\AdministrServiceProvider::class,
    ];

    protected $facades = [
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        collect($this->providers)
            ->each(function($provider) {
                $this->app->register($provider);
            });

        AliasLoader::getInstance($this->facades);
    }
}
