<?php

namespace Sco\Http\Controllers\Backend\System;


use Sco\Http\Controllers\Backend\BackendController;
use Sco\Models\Config;

class IndexController extends BackendController
{

    public function index()
    {
        dd(Config::with()->paginate(20));
        return $this->render('system.index');
    }
}