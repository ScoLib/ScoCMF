<?php

namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;
use Repository;
use Illuminate\Http\Request;
use Sco\Repositories\RouteRepository;
use Route;

/**
 * 路由管理
 * Class RouteController
 *
 * @package Sco\Http\Controllers\Admin\System
 */
class RouteController extends BaseController
{

    /**
     * 路由列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $this->routes = app(RouteRepository::class)->getRouteTreeList();

        return $this->render('system.route.index');
    }

    /**
     * 新增路由
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAdd()
    {
        $this->middlewares = $this->getAppMiddlewares();
        $this->routes      = app(RouteRepository::class)->getRouteTreeList();
        return $this->render('system.route.add');
    }

    /**
     * 保存路由信息
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'pid'    => 'integer',
            'title'  => 'required',
            'name'   => ['bail', 'required', 'regex:/^[\w\.]+$/', 'unique:routes,name'],
            'uri'    => 'required',
            'action' => 'required',
            //'' => '',
        ]);

        app(RouteRepository::class)->createRoute($request);
        return response()->json(success('新增路由完成', ['url' => route('admin.system.route')]));
    }

    /**
     * 编辑路由
     *
     * @param integer $id 路由ID
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit($id)
    {
        if ($id) {
            $this->middlewares = $this->getAppMiddlewares();
            $this->route       = app(RouteRepository::class)->find($id);
            $this->routes      = app(RouteRepository::class)->getRouteTreeList();
        }
        return $this->render('system.route.edit');
    }

    /**
     * 保存路由信息
     *
     * @param \Illuminate\Http\Request $request 提交数据
     * @param integer                  $id      路由ID
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postEdit(Request $request, $id)
    {
        $this->validate($request, [
            'pid'    => 'integer',
            'title'  => 'required',
            'name'   => ['bail', 'required', 'regex:/^[\w\.]+$/', 'unique:routes,name,' . $id],
            'uri'    => 'required',
            'action' => 'required',
            //'' => '',
        ]);

        app(RouteRepository::class)->updateRoute($request, $id);
        return response()->json(success('编辑路由完成', ['url' => route('admin.system.route')]));
    }

    /**
     * 删除路由
     *
     * @param integer $id
     */
    public function getDelete($id)
    {

    }

    /**
     * 获取所有中间件
     *
     * @return array
     */
    private function getAppMiddlewares()
    {
        $group = ['web', 'api'];
        return array_merge($group, array_keys(Route::getMiddleware()));

    }
}