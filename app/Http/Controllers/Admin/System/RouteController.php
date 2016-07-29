<?php

namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;
use Repository;
use Illuminate\Http\Request;
use Sco\Repositories\RouteRepository;

class RouteController extends BaseController
{

    public function getIndex()
    {
        $this->routes = app(RouteRepository::class)->getRouteTreeList();

        return $this->render('system.route.index');
    }

    public function getAdd()
    {
        $this->routes = app(RouteRepository::class)->getRouteTreeList();
        return $this->render('system.route.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|alpha|unique:routes'
        ]);

        $res = app(RouteRepository::class)->create($request->input());

        return response()->json(success());
    }

    public function getEdit(Request $request)
    {

        return $this->render('system.route.edit');
    }

    public function postEdit(Request $request)
    {

    }
}