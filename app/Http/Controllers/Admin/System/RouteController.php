<?php

namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;
use Repository;
use Illuminate\Http\Request;
use Sco\Repositories\RouteRepository;

/**
 * Class RouteController
 *
 * @package Sco\Http\Controllers\Admin\System
 */
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
            'title'  => 'required',
            'name'   => ['bail', 'required', 'regex:/^[a-z\.]+$/', 'unique:routes'],
            'uri'    => 'required',
            'action' => 'required',
            //'' => '',
        ]);

        $result = app(RouteRepository::class)->createRoute($request);
        if ($result['state']) {
            $result['data'] = ['url' => route('admin.system.route')];
        }

        return response()->json($result);
    }

    public function getEdit($id)
    {
        if ($id) {
            $this->route = app(RouteRepository::class)->find($id);
            $this->routes = app(RouteRepository::class)->getRouteTreeList();
        }
        return $this->render('system.route.edit');
    }

    public function postEdit(Request $request)
    {

    }
}