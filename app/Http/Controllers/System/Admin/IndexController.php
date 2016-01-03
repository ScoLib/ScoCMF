<?php

namespace Sco\Http\Controllers\System\Admin;


use Sco\Http\Controllers\AdminController;

class IndexController extends AdminController
{

    public function index()
    {
        return $this->render('system.index');
    }
}