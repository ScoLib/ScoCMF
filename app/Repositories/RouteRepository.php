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

    public function getRouteTreeList()
    {
        $routes = $this->getAllChildren(0);
        //$routes = $this->getChildrenList(0);
        dd($routes);

    }

    protected function getTreeData()
    {
        return $this->orderBy('sort')->all();
    }

}