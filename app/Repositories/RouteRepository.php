<?php


namespace Sco\Repositories;


use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;
use Sco\Models\Route;
use ScoLib\Tree\Traits\TreeTrait;

class RouteRepository extends BaseRepository implements CacheableInterface
{
    protected $cacheOnly = ['all'];

    protected $treeDataParentIdName = 'pid';

    use CacheableRepository, TreeTrait;

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

    protected function getTreeAllNodes()
    {
        return $this->orderBy('sort')->all();
    }

    public function getValidRouteList()
    {
        $all = $this->orderBy('sort')->all();
        $routes = collect([]);
        foreach ($all as $route) {
            if (!empty($route->uri) && $route->uri != '#') {
                $routes->push($route);
            }
        }
        return $routes;
    }

    public function getAdminMenu()
    {
        $routes = $this->getDescendants(1);
        $menus = collect([]);
        foreach ($routes as $route) {
            if ($route->is_menu == 1) {
                $menus->push($route);
            }
        }
        return $menus;
    }

}