<?php


namespace Sco\Http\Controllers\Admin;

use Auth, Route, Breadcrumbs, Event;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Events\Login;
use Sco\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Sco\Repositories\RouteRepository;

/**
 * 后台基础控制器
 * 所有后台控制器都应继承该类
 *
 * @package Sco\Http\Controllers
 */
class BaseController extends Controller
{

    use AuthorizesRequests, ValidatesRequests;

    protected $user;

    public function __construct()
    {
        parent::__construct();

        Event::listen([Authenticated::class, Login::class], function ($event) {
            $this->user = $event->user;
            if ($this->user && !request()->ajax()) {
                $this->setParam('user', $this->user);
                $this->getLeftMenu();
                $this->breadcrumbs();
            }
        });
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
     * 左侧菜单
     */
    private function getLeftMenu()
    {
        $adminId = 1; // 后台路由ID，默认应该是1，如有变更则以实际ID为准

        $this->leftMenu = app(RouteRepository::class)->getMenuRouteList($adminId);
    }

    /**
     * 面包屑导航
     */
    private function breadcrumbs()
    {
        // 获取当前路由的相关路由name
        $parentTree = app(RouteRepository::class)->getParentTreeAndSelfByName(Route::currentRouteName());

        $this->currentMenuNames = $parentTree->pluck('name');

        foreach ($parentTree as $key => $route) {
            Breadcrumbs::register($route->name,
                function ($breadcrumbs) use ($parentTree, $key, $route) {
                    if ($route->pid) {
                        $parent = $parentTree->get(($key - 1));
                        $breadcrumbs->parent($parent->name);
                    }

                    if ($route->pid == 0) {
                        $name = $route->name . '.index';
                    } else {
                        $name = $route->uri == '#' ? '' : $route->name;
                    }

                    if (empty($name) || preg_match('/\{.*?\}/', $route->uri)) {
                        $breadcrumbs->push($route->title);
                    } else {
                        $breadcrumbs->push($route->title, route($name));
                    }
                });
        }
        $this->breadcrumbs = Route::currentRouteName();
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