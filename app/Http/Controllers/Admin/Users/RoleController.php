<?php

namespace Sco\Http\Controllers\Admin\Users;


use Illuminate\Http\Request;
use Sco\Http\Controllers\Admin\BaseController;
use Sco\Repositories\RoleRepository;
use Sco\Repositories\RouteRepository;

/**
 * 角色管理
 * Class RoleController
 *
 * @package Sco\Http\Controllers\Admin\Users
 */
class RoleController extends BaseController
{
    /**
     * 角色列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $this->roles = app(RoleRepository::class)->getAllRoles();
        return $this->render('users.role.index');
    }

    public function getAdd()
    {

    }

    public function postAdd(Request $request)
    {

    }

    public function getEdit($id)
    {

    }

    public function postEdit(Request $request, $id)
    {

    }

    public function getAuthorize($id)
    {
        $this->role        = app(RoleRepository::class)->find($id);
        $this->permList    = app(RouteRepository::class)->getPermRouteList(1);
        $this->rolePermIds = $this->role->perms()->getRelatedIds();
        return $this->render('users.role.authorize');
    }

    public function postAuthorize(Request $request, $id)
    {
        app(RoleRepository::class)->find($id)->savePermissions($request->input('perms'));
        return response()->json(success('授权完成', ['url' => route('admin.users.role')]));
    }

    public function getDelete($id)
    {

    }
}