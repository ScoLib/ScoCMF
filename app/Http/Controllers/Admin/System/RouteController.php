<?php

namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;
use Repository;
use Illuminate\Http\Request;
use Sco\Repositories\RouteRepository;
use Route;

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
            //'pid' => 'integer',
            'title' => 'required',
            'name' => ['bail', 'required', 'regex:/^[a-z\.]+$/', 'unique:routes'],
            'uri' => 'required',
            'action' => 'required',
            //'' => '',
        ]);

        $result = app(RouteRepository::class)->createRoute($request);
        if ($result['state']) {
            $result['data'] = ['url' => route('admin.system.route')];
        }

        return response()->json($result);
    }

    public function getEdit(Request $request)
    {

        return $this->render('system.route.edit');
    }

    public function postEdit(Request $request)
    {

    }
}