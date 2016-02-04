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
        // 后台模板目录（空间）
        view()->addNamespace('backend', base_path('resources/backend'));
        app('translator')->addNamespace('Backend', base_path('resources/lang/backend'));
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
