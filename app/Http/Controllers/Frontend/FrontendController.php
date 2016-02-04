<?php


namespace Sco\Http\Controllers\Frontend;

use Sco\Http\Controllers\Controller;


/**
 * 前台基础控制器
 *
 * @package Sco\Http\Controllers
 */
class FrontendController extends Controller
{

    protected function render($view, $params = [])
    {
        return parent::render($view, $params);
    }
}