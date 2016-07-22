<?php


namespace Sco\Http\Controllers\Admin;

use Auth, Route;
use Sco\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * 后台基础控制器
 * 所有后台控制器都应继承该类
 *
 * @package Sco\Http\Controllers
 */
class BaseController extends Controller
{

    use AuthorizesRequests, ValidatesRequests;

    //protected $user;

    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth:admin');
        $this->user = Auth::guard('admin')->user();

        $this->breadcrumbs = Route::currentRouteName();

    }

    /**
     * 后台入口页（控制台）
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return $this->render('index');
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


    /**
     * 重构验证响应方法（主要针对ajax|json）
     *
     * @param \Illuminate\Http\Request $request
     * @param array                    $errors
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function buildFailedValidationResponse(Request $request, array $errors)
    {
        if (($request->ajax() && !$request->pjax()) || $request->wantsJson()) {
            $error = array_shift($errors);
            $error = is_array($error) ? current($error) : $error;
            return new JsonResponse(error($error));
        }
        return parent::buildFailedValidationResponse($request, $errors);
    }

}