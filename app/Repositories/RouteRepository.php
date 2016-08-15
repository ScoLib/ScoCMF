<?php

namespace Sco\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;
use Bosnadev\Repositories\Traits\CacheableRepository;
use Illuminate\Http\Request;
use Sco\Models\Route;
use ScoLib\Tree\Traits\TreeTrait;
use InvalidArgumentException;

/**
 * Class RouteRepository
 *
 * @package Sco\Repositories
 */
class RouteRepository extends Repository
{
    use TreeTrait, CacheableRepository;

    protected $treeNodeParentIdName = 'pid';

    private $allRoutes = null;

    public function model()
    {
        return Route::class;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getRouteTreeList()
    {
        $routes = $this->getDescendants(0);
        //dd($routes);
        return $routes;
    }

    private function getAll()
    {
        if ($this->allRoutes) {
            return $this->allRoutes;
        }

        $this->allRoutes = $this->remember('all', function () {
            return $this->model->orderBy('sort')->get();
        });
        return $this->allRoutes;
    }

    protected function getTreeAllNodes()
    {
        return $this->getAll();
    }

    /**
     * 获取有效的路由列表
     *
     * @return \Illuminate\Support\Collection
     */
    public function getValidRouteList()
    {
        $all    = $this->getAll();
        $routes = collect([]);
        foreach ($all as $route) {
            if (!empty($route->uri) && $route->uri != '#') {
                $routes->push($route);
            }
        }
        return $routes;
    }

    public function getRouteInfoByName($name)
    {
        $all = $this->getAll();
        $key = $all->search(function ($item) use ($name) {
            return $item->name == $name;
        });
        return $all->get($key);
    }

    public function getParentTree($id)
    {
        return $this->getAncestors($id);
    }

    public function getParentTreeAndSelfByName($name)
    {
        $self   = $this->getRouteInfoByName($name);
        $parent = $this->getParentTree($self->id);
        $parent->push($self);
        return $parent;
    }

    public function createRoute(Request $request)
    {
        $input  = $request->input();
        $this->checkRoute($input);
        $this->create($input);
        return true;
    }

    public function updateRoute(Request $request, $id)
    {
        $input  = $request->input();
        $this->checkRoute($input);
        $this->update($input, $id);
        return true;
    }

    /**
     * 检验路由数据是否正确
     *
     * @param array $route
     *
     * @return Exception
     */
    private function checkRoute($route)
    {
        if ($route['action'] != '#') {
            list($class, $method) = array_pad(explode('@', $route['action']), 2, null);
            if (is_null($class) || is_null($method)) {
                throw new InvalidArgumentException('操作（Action） 格式有误');
            }
            if (strpos($class, '\\') !== 0) {
                $class = app()->getNamespace() . 'Http\\Controllers\\' . $class;
            }

            if (!method_exists($class, $method)) {
                throw new InvalidArgumentException(sprintf('方法 [%s] 不存在', $route['action']));
            }
        }

        if (!empty($route['middleware'])) {
            $middlewares = explode('|', $route['middleware']);
            foreach ($middlewares as $middleware) {
                list($name, $parameters) = array_pad(explode(':', $middleware, 2), 2, null);
                $className = \Route::resolveMiddlewareClassName($middleware);
                if ($name == $className) {
                    throw new InvalidArgumentException(sprintf('中间件 [%s] 不存在', $middleware));
                }
            }
        }
        return true;
    }

}