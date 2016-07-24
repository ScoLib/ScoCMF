<?php

namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;
use Repository;
use Sco\Http\Requests\Request;

class RouteController extends BaseController
{

    public function getIndex()
    {
        $this->routes = Repository::route()->getRouteTreeList();

        return $this->render('system.route.index');
    }

    public function getAdd()
    {
        $this->routes = Repository::route()->getRouteTreeList();
        return $this->render('system.route.add');
    }

    public function getEdit(Request $request)
    {

    }
}