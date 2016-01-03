<?php


namespace Sco\Http\Controllers;


/**
 * 后台基础控制器
 * 所有后台控制器都应继承该类
 *
 * @package Sco\Http\Controllers
 */
class AdminController extends Controller
{

    public function __construct()
    {
        // 后台模板目录（空间）
        view()->addNamespace('admin', base_path('resources/admin'));
    }

    /**
     * 后台入口页（欢迎页面）
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome()
    {
        return $this->render('welcome');
    }

    /**
     * 后台视图输出
     *
     * @param string $view
     * @param array  $params
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function render($view, $params = [])
    {
        return parent::render('admin::' . $view, $params);
    }

}