<?php

namespace Sco\Http\Controllers\Backend\System;

use Illuminate\Http\Request;
use Sco\Http\Controllers\Backend\BackendController;
use Sco\Repositories\ConfigRepository;

/**
 * 站点设置
 *
 * @package Sco\Http\Controllers\Backend\System
 */
class IndexController extends BackendController
{
    private $config;

    public function __construct(ConfigRepository $config)
    {
        parent::__construct();
        $this->config = $config;
    }

    public function getIndex()
    {
        $configs = $this->config->getConfigs();
        return $this->render('system.index.index', compact('configs'));
    }

    public function postIndex(Request $request)
    {
        $configs = $request->input('configs');
        $this->config->saveConfigs($configs);
        return response()->json(success());
    }

}