<?php

namespace Sco\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        // 前台语言包目录
        //$this->loadTranslationsFrom(base_path('resources/lang/frontend'), 'Frontend');
        $theme = $request->input('t') ?: config('view.theme');
        $path = base_path('resources/themes/' . $theme);
        if (!is_dir($path)) {
            $path = base_path('resources/themes/' . config('view.theme'));
        }

        $this->loadViewsFrom($path, 'theme');

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
