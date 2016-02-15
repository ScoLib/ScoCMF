<?php

namespace Sco\Providers;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 后台模板目录
        $this->loadViewsFrom(base_path('resources/backend'), 'backend');
        // 后台语言包目录
        $this->loadTranslationsFrom(base_path('resources/lang/backend'), 'Backend');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
