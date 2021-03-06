<?php

namespace Sco\Providers;

use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 前台语言包目录
        //$this->loadTranslationsFrom(base_path('resources/lang/frontend'), 'Frontend');
        $this->loadViewsFrom(base_path('resources/themes/' . config('view.theme')), 'theme');

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
