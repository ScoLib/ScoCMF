<?php


namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;
use Repository;
use Validator;
use Illuminate\Http\Request;

/**
 * 权限管理
 *
 * @package Sco\Http\Controllers\Admin\System
 */
class PermissionController extends BaseController
{


    public function getIndex()
    {
        $this->list = Repository::create('Admin')->all();
        //dd($this->params);
        return $this->render('system.auth.index');
    }

    public function getAddAdmin()
    {
        $this->groups = Repository::create('AdminGroup')->all();
        return $this->render('system.auth.addadmin');
    }

    public function postAddAdmin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|between:3,15|unique:admins,username',
            'password' => 'required|between:6,20',
            'repassword' => 'same:password',
            'group_id' => 'required'
        ]);
        $admin = Repository::create('Admin')->create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'group_id' => $request->input('group_id'),
        ]);
        dd($admin);
    }

    public function getEditAdmin($id)
    {
        $info = Repository::create('Admin')->find($id);
        return $this->render('system.site.editadmin');
    }

    public function postEditAdmin(Request $request)
    {

    }

    public function delAdmin($id)
    {
        
    }

    public function postCheck(Request $request)
    {
        if ($request->has('username')) {
            $rules = [
                'username' => 'required|unique:admins,username'
            ];
            /*$condition = [
                'username' => $request->input('username')
            ];
            if ($request->has('id')) {
                $condition[] = ['id', '!=', $request->input('id')];
            }

            if (Repository::create('Admin')->findWhere($condition)->isEmpty()) {
                exit('true');
            } else {
                exit('false');
            }*/
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                exit('false');
            } else {
                exit('true');
            }

        }

    }
}