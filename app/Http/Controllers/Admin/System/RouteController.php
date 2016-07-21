<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/19
 * Time: 16:37
 */

namespace Sco\Http\Controllers\Admin\System;


use Sco\Http\Controllers\Admin\BaseController;
use Repository;

class RouteController extends BaseController
{

    public function getIndex()
    {
        $this->routes = Repository::route()->getRouteTreeList();

        return $this->render('system.route.index');
    }
}