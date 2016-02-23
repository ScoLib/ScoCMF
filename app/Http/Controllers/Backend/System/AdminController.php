<?php


namespace Sco\Http\Controllers\Backend\System;


use Sco\Http\Controllers\Backend\BackendController;

/**
 * 权限管理
 *
 * @package Sco\Http\Controllers\Backend\System
 */
class AdminController extends BackendController
{

    public function getIndex()
    {
        return $this->render('system.admin.index');
    }

    public function getAddAdmin()
    {

        return $this->render('system.admin.addadmin');
    }
}