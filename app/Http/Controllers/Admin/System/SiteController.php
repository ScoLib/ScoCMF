<?php

namespace Sco\Http\Controllers\Admin\System;

use Illuminate\Http\Request;
use Sco\Http\Controllers\Admin\BaseController;
use Sco\Repositories\ConfigRepository;

/**
 * 站点设置
 *
 * @package Sco\Http\Controllers\Admin\System
 */
class SiteController extends BaseController
{

    public function getIndex()
    {
        $this->configs = app(ConfigRepository::class)->getConfigs();
        return $this->render('system.site.index');
    }

    public function postIndex(Request $request)
    {
        $configs = $request->input('configs');
        app(ConfigRepository::class)->saveConfigs($configs);
        return response()->json(success());
    }

}