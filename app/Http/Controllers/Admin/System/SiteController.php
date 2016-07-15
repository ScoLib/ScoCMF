<?php

namespace Sco\Http\Controllers\Admin\System;

use Illuminate\Http\Request;
use Sco\Http\Controllers\Admin\BaseController;
use Repository;

/**
 * 站点设置
 *
 * @package Sco\Http\Controllers\Admin\System
 */
class SiteController extends BaseController
{

    public function getIndex()
    {
        $configs = Repository::config()->getConfigs();
        return $this->render('system.site.index', compact('configs'));
    }

    public function postIndex(Request $request)
    {
        $configs = $request->input('configs');
        Repository::config()->saveConfigs($configs);
        return response()->json(success());
    }

}