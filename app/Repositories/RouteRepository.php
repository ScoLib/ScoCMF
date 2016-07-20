<?php


namespace Sco\Repositories;


use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;
use Sco\Models\Route;

class RouteRepository extends BaseRepository implements CacheableInterface
{
    protected $cacheOnly = ['all'];

    use CacheableRepository;

    public function model()
    {
        return Route::class;
    }

    public function getRouteTreeList()
    {
        $routes = $this->getChildrenList(0);
        dd($routes);
    }

    public function getChildrenList($pid)
    {
        static $routes;
        $list = $this->orderBy('sort')->all();
        $pid == 0 && $routes = collect();
        foreach ($list as $item) {
            if ($item->pid == $pid) {
                $routes->push($item);
                $this->getChildrenList($item->id);
            }
        }
        return $routes;
    }
}