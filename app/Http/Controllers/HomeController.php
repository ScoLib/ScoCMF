<?php


namespace Sco\Http\Controllers;


/**
 * 前台基础控制器
 *
 * @package Sco\Http\Controllers
 */
class HomeController extends Controller
{

    protected function render($view, $params = [])
    {
        return parent::render($view, $params);
    }
}