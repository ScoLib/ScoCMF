<?php


namespace Sco\Repositories;


use Bosnadev\Repositories\Eloquent\Repository;
use Bosnadev\Repositories\Traits\CacheableRepository;
use Sco\Models\Route;
use ScoLib\Tree\Traits\TreeTrait;

class RouteRepository extends Repository
{
    use TreeTrait, CacheableRepository;

    protected $treeNodeParentIdName = 'pid';

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
        return $this->remember('all', function () {
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

}