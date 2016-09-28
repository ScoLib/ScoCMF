<?php

namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;
use Sco\Repositories\PermissionRepository;
use Route;
use Artisan;

/**
 * 菜单管理
 * Class MenuController
 *
 * @package Sco\Http\Controllers\Admin\System
 */
class MenuController extends BaseController
{

    /**
     * 路由列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $this->routes = app(PermissionRepository::class)->getRouteTreeList();

        return $this->render('system.menu.index');
    }

    /**
     * 新增路由
     *
     * @param int $pid
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAdd($pid = 0)
    {

        if ($pid) {

        }

        $this->routes = app(PermissionRepository::class)->getRouteTreeList();
        return $this->render('system.menu.add');
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

        app(PermissionRepository::class)->createRoute($request);
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
            $this->route       = app(PermissionRepository::class)->find($id);
            $this->routes      = app(PermissionRepository::class)->getRouteTreeList();
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

        app(PermissionRepository::class)->updateRoute($request, $id);
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


}