<?php
namespace Sco\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use Sco\Http\Controllers\Admin\BaseController;
use Sco\Repositories\RoleRepository;
use Sco\Repositories\UserRepository;

class UserController extends BaseController
{
    public function getIndex()
    {
        $this->roles = app(RoleRepository::class)->getAllRoles();
        $this->users = app(UserRepository::class)->paginate(15);
        return $this->render('users.user.index');
    }

    public function getAdd()
    {
        return $this->render('users.user.add');
    }

    public function postAdd(Request $request)
    {

    }

    public function getEdit($uid)
    {
        $this->userInfo = app(UserRepository::class)->find($uid);

        return $this->render('users.user.edit');
    }

    public function postEdit(Request $request, $uid)
    {

    }
}