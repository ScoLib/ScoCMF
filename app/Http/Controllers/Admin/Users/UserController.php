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
        $this->roles = app(RoleRepository::class)->getAllRoles();
        return $this->render('users.user.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'username' => ['bail', 'required', 'between:3,15', 'regex:/^[\w]+$/', 'unique:users'],
            'email' => 'bail|required|email|unique:users',
            'password' => 'bail|required|between:6,20',
            'role' => 'bail|required|exists:roles,id'
        ]);

        app(UserRepository::class)->createUser($request);
        return response()->json(success('新增用户完成', ['url' => route('admin.users.user')]));
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