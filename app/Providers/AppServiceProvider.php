<?php

namespace Sco\Providers;

use Illuminate\Support\ServiceProvider;
use Sco\Repositories\RepositoryManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->registerRepository();
    }

    protected function registerRepository()
    {
        $this->app->singleton('repository', function($app) {
            return new RepositoryManager($app);
        });

    }
}
