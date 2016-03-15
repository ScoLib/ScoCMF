<?php


namespace Sco\Http\Controllers\Backend\System;


use Sco\Http\Controllers\Backend\BackendController;
use Repository;
use Validator;
use Illuminate\Http\Request;

/**
 * 权限管理
 *
 * @package Sco\Http\Controllers\Backend\System
 */
class AdminController extends BackendController
{


    public function getIndex()
    {
        $this->list = Repository::create('Admin')->all();
        //dd($this->params);
        return $this->render('system.admin.index');
    }

    public function getAddAdmin()
    {
        $this->groups = Repository::create('AdminGroup')->all();
        return $this->render('system.admin.addadmin');
    }

    public function postAddAdmin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|between:3,15|unique:admins,username',
            'password' => 'required|between:6,20',
            'repassword' => 'same:password',
            'group_id' => 'required'
        ]);
        
    }

    public function getEditAdmin($id)
    {
        $info = Repository::create('Admin')->find($id);
        return $this->render('system.admin.editadmin');
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