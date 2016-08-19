<?php

namespace Sco\Http\Controllers\Admin\Users;


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
}