<?php

 namespace Lembarek\ShareFiles\Providers;

use Illuminate\Support\ServiceProvider;

class ShareFilesServiceProvider extends ServiceProvider {

    /**
    * Bootstrap any application services.
    *
    * @return void
    */
    public function boot()
    {
        if(! $this->app->routesAreCached()){
            require __DIR__.'/../routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/../views', 'shareFiles');

        $this->publishes([
            __DIR__.'/../migrations' => base_path('database/migrations')
        ], 'migrations');
    }

    /**
    * Register any application services.
    *
    * This service provider is a great spot to register your various container
    * bindings with the application. As you can see, we are registering our
    * "Registrar" implementation here. You can add your own bindings too!
    *
    * @return void
    */
    public function register()
    {
        $this->app->bind(
            'Lembarek\ShareFiles\Repositories\FileRepositoryInterface',
            'Lembarek\ShareFiles\Repositories\FileRepository'
        );
    }

}

