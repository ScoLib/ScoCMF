<?php
namespace Sco\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use Sco\Http\Controllers\Admin\BaseController;
use Sco\Repositories\RoleRepository;
use Sco\Repositories\UserRepository;

/**
 * 用户管理
 * Class UserController
 *
 * @package Sco\Http\Controllers\Admin\Users
 */
class UserController extends BaseController
{
    /**
     * 用户列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $this->roles = app(RoleRepository::class)->getAllRoles();
        $this->users = app(UserRepository::class)->paginate(15);
        return $this->render('users.user.index');
    }

    /**
     * 新增用户
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAdd()
    {
        $this->roles = app(RoleRepository::class)->getAllRoles();
        return $this->render('users.user.add');
    }

    /**
     * 保存用户信息
     *
     * @param \Illuminate\Http\Request $request 提交信息
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'username' => ['bail', 'required', 'between:3,15', 'regex:/^[\w]+$/', 'unique:users'],
            'email'    => 'bail|required|email|unique:users',
            'password' => 'bail|required|between:6,20',
            'role'     => 'bail|required|exists:roles,id'
        ]);

        app(UserRepository::class)->createUser($request);
        return response()->json(success('新增用户完成', ['url' => route('admin.users.user')]));
    }

    /**
     * 编辑用户
     *
     * @param integer $uid 用户UID
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit($uid)
    {
        $this->userInfo = app(UserRepository::class)->find($uid);
        $this->roles    = app(RoleRepository::class)->getAllRoles();
        return $this->render('users.user.edit');
    }

    /**
     * 保存用户信息
     *
     * @param \Illuminate\Http\Request $request 提交信息
     * @param  integer                 $uid     用户UID
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postEdit(Request $request, $uid)
    {
        $this->validate($request, [
            'username' => [
                'bail', 'required', 'between:3,15', 'regex:/^[\w]+$/',
                'unique:users,username,' . $uid . ',uid'
            ],
            'email'    => 'bail|required|email|unique:users,email,' . $uid . ',uid',
            'password' => 'between:6,20',
            'role'     => 'bail|required|exists:roles,id'
        ]);
        app(UserRepository::class)->updateUser($request, $uid);
        return response()->json(success('编辑用户完成', ['url' => route('admin.users.user')]));
    }

    /**
     * 删除用户
     *
     * @param integer $uid 用户UID
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDelete($uid)
    {
        app(UserRepository::class)->delete($uid);
        return response()->json(success('删除用户完成'));
    }
}