<?php

namespace Sco\Http\Controllers\Backend\System;

use Illuminate\Http\Request;
use Sco\Http\Controllers\Backend\BackendController;
use Sco\Repositories\ConfigRepository;

class IndexController extends BackendController
{
    private $config;

    public function __construct(ConfigRepository $config)
    {
        parent::__construct();
        $this->config = $config;
    }

    public function index()
    {
        $configs = $this->config->getConfigs();
        return $this->render('system.index', compact('configs'));
    }

    public function saveSite(Request $request)
    {
        $configs = $request->input('configs');
        $this->config->saveConfigs($configs);
        return response()->json(success());
    }

    public function edit()
    {
        return $this->render('system.edit')->renderSections()['content'];
    }
}