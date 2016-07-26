<?php

namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;
use Repository;
use Illuminate\Http\Request;

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

    public function postAdd(Request $request)
    {

    }

    public function getEdit(Request $request)
    {

        return $this->render('system.route.edit');
    }

    public function postEdit(Request $request)
    {

    }
}