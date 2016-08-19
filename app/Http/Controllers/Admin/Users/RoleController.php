<?php

namespace Sco\Http\Controllers\Admin\Users;


use Illuminate\Http\Request;
use Sco\Http\Controllers\Admin\BaseController;
use Sco\Repositories\RoleRepository;

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

    }

    public function getDelete($id)
    {

    }
}