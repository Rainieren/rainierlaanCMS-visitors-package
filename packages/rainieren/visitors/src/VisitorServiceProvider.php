<?php

namespace Rainieren\Visitors;

use Illuminate\Support\ServiceProvider;

class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function boot()
    {
        // Controllers
        $this->app->make('Rainieren\Visitors\Http\Controllers\VisitorController');
        // Views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'visitors');
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/visitors'),
        ]);
        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        include __DIR__ . '/routes/routes.php';
    }
}
