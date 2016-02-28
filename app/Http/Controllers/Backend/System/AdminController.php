<?php


namespace Sco\Http\Controllers\Backend\System;


use Sco\Http\Controllers\Backend\BackendController;
use Repository;

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
        return $this->render('system.admin.addadmin');
    }

    public function postAddAdmin()
    {

    }

    public function getEditAdmin($id)
    {
        $info = Repository::create('Admin')->find($id);
        return $this->render('system.admin.editadmin');
    }
}