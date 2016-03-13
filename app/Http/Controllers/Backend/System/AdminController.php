<?php


namespace Sco\Http\Controllers\Backend\System;


use Sco\Http\Controllers\Backend\BackendController;
use Repository;
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

    }

    public function getEditAdmin($id)
    {
        $info = Repository::create('Admin')->find($id);
        return $this->render('system.admin.editadmin');
    }

    public function postCheck(Request $request)
    {
        if ($request->has('username')) {
            $condition = [
                'username' => $request->input('username')
            ];
            if ($request->has('id')) {
                $condition[] = ['id', '!=', $request->input('id')];
            }

            if (Repository::create('Admin')->findWhere($condition)->isEmpty()) {
                exit('true');
            } else {
                exit('false');
            }
        }
    }
}