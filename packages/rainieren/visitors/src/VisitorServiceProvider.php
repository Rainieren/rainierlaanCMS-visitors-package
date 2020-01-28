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
        // Controllers
        $this->app->make('Rainieren\Visitors\Http\Controllers\VisitorController');
        // Views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'visitors');
        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes/routes.php';
    }
}
