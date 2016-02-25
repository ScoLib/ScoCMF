<?php

namespace Sco\Http\Controllers\Backend\System;

use Illuminate\Http\Request;
use Sco\Http\Controllers\Backend\BackendController;
use Repository;

/**
 * 站点设置
 *
 * @package Sco\Http\Controllers\Backend\System
 */
class IndexController extends BackendController
{

    public function getIndex()
    {
        $configs = Repository::create('Config')->getConfigs();
        return $this->render('system.index.index', compact('configs'));
    }

    public function postIndex(Request $request)
    {
        $configs = $request->input('configs');
        Repository::create('Config')->saveConfigs($configs);
        return response()->json(success());
    }

}