<?php

namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;
use Repository;
use Illuminate\Http\Request;
use Sco\Repositories\RouteRepository;
use Route;

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
        $this->middlewares = $this->getAppMiddlewares();
        $this->routes = app(RouteRepository::class)->getRouteTreeList();
        return $this->render('system.route.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'pid' => 'integer',
            'title'  => 'required',
            'name'   => ['bail', 'required', 'regex:/^[\w\.]+$/', 'unique:routes,name'],
            'uri'    => 'required',
            'action' => 'required',
            //'' => '',
        ]);

        app(RouteRepository::class)->createRoute($request);
        return response()->json(success('新增路由完成', ['url' => route('admin.system.route')]));
    }

    public function getEdit($id)
    {
        if ($id) {
            $this->middlewares = $this->getAppMiddlewares();
            $this->route = app(RouteRepository::class)->find($id);
            $this->routes = app(RouteRepository::class)->getRouteTreeList();
        }
        return $this->render('system.route.edit');
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request, [
            'pid' => 'integer',
            'title'  => 'required',
            'name'   => ['bail', 'required', 'regex:/^[\w\.]+$/', 'unique:routes,name,' . $id],
            'uri'    => 'required',
            'action' => 'required',
            //'' => '',
        ]);

        app(RouteRepository::class)->updateRoute($request, $id);
        return response()->json(success('编辑路由完成', ['url' => route('admin.system.route')]));
    }

    public function getDelete($id)
    {

    }

    private function getAppMiddlewares()
    {
        $group = ['web', 'api'];
        return array_merge($group, array_keys(Route::getMiddleware()));

    }
}