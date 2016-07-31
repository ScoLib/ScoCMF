<?php


namespace Sco\Repositories;


use Bosnadev\Repositories\Eloquent\Repository;
use Sco\Models\Route;
use ScoLib\Tree\Traits\TreeTrait;
use Cache;

class RouteRepository extends Repository
{
    protected $treeNodeParentIdName = 'pid';
    // 路由数据缓存键值
    private static $cacheKey = 'route_all_data';

    use TreeTrait;

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
        return Cache::rememberForever(self::$cacheKey, function () {
            return $this->model->orderBy('sort')->get();
        });

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
        $self = $this->getRouteInfoByName($name);
        $parent = $this->getParentTree($self->id);
        $parent->push($self);
        return $parent;
    }

    public function create(array $data)
    {
        $result = parent::create($data);
        if ($result) {
            Cache::forget(self::$cacheKey);
        }
        return $result;

    }

}