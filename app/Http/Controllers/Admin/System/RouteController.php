<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/19
 * Time: 16:37
 */

namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;

class RouteController extends BaseController
{

    public function getIndex()
    {
        return $this->render('system.route.index');
    }
}