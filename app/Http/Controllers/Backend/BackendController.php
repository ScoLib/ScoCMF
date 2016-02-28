<?php


namespace Sco\Http\Controllers\Backend;

use Auth;
use Sco\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * 后台基础控制器
 * 所有后台控制器都应继承该类
 *
 * @package Sco\Http\Controllers
 */
class BackendController extends Controller
{

    use AuthorizesRequests, ValidatesRequests;

    //protected $user;

    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth:admin');
        $this->user = Auth::guard('admin')->user();
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
        return parent::render('backend::' . $view, $params);
    }

}