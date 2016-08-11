<?php

namespace Sco\Http\Controllers\Admin\Users;


use Sco\Http\Controllers\Admin\BaseController;
use Sco\Repositories\RoleRepository;

class RoleController extends BaseController
{
    public function getIndex()
    {
        $this->roles = app(RoleRepository::class)->getAllRoles();
        return $this->render('users.role.index');
    }
}