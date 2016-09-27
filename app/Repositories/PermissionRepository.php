<?php

namespace Sco\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;
use Bosnadev\Repositories\Traits\CacheableTrait;
use Illuminate\Http\Request;
use Sco\Models\Permission;
use ScoLib\Tree\Traits\TreeTrait;
use InvalidArgumentException;

/**
 * Class PermissionRepository
 *
 * @package Sco\Repositories
 */
class PermissionRepository extends Repository
{
    use TreeTrait, CacheableTrait;

    protected $treeNodeParentIdName = 'pid';

    private $allRoutes = null;

    private $validList = null;

    private $permList = null;

    private $menuList = null;


    public function model()
    {
        return Permission::class;
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

    /**
     * Tree Trait 获取所有节点
     *
     * @return mixed|null
     */
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
        if ($this->validList) {
            return $this->validList;
        }

        $all = $this->getAll();

        $this->validList = collect([]);
        foreach ($all as $route) {
            if (!empty($route->uri) && $route->uri != '#') {
                $this->validList->push($route);
            }
        }
        return $this->validList;
    }

    /**
     * 获取权限列表
     *
     * @param int $parentId
     *
     * @return \Illuminate\Support\Collection|null
     */
    public function getPermRouteList($parentId)
    {
        if ($this->permList) {
            return $this->permList;
        }

        $all = $this->getAll();

        $routes = collect([]);
        foreach ($all as $route) {
            if ($route->is_perm) {
                $routes->push($route);
            }
        }
        $this->setAllNodes($routes);
        return $this->permList = $this->getLayerOfDescendants($parentId);
    }

    public function getMenuList()
    {
        if ($this->menuList) {
            return $this->menuList;
        }
        $all = $this->getAll();

        $routes = collect([]);
        foreach ($all as $route) {
            if ($route->is_menu) {
                $routes->push($route);
            }
        }

        $this->setAllNodes($routes);
        return $this->menuList = $this->getLayerOfDescendants(0);
    }

    public function getRouteInfoById($id)
    {
        return $this->getSelf($id);
    }

    public function getRouteInfoByName($name)
    {
        $all = $this->getAll();
        $key = $all->search(function ($item) use ($name) {
            return $item->name == $name;
        });
        return $key === false ? false : $all->get($key);
    }

    public function getParentTree($id)
    {
        return $this->getAncestors($id);
    }

    public function getParentTreeAndSelfById($id)
    {
        $self = $this->getRouteInfoById($id);
        if ($self) {
            $parent = $this->getParentTree($self->id);
            $parent->push($self);
            return $parent;
        }
        return false;
    }

    public function getParentTreeAndSelfByName($name)
    {
        $self   = $this->getRouteInfoByName($name);
        if ($self) {
            $parent = $this->getParentTree($self->id);
            $parent->push($self);
            return $parent;
        }
        return false;

    }

    public function createRoute(Request $request)
    {
        $input = $request->input();
        $this->checkRoute($input);
        $this->create($input);
        return true;
    }

    public function updateRoute(Request $request, $id)
    {
        $input = $request->input();
        $this->checkRoute($input);
        $this->update($input, $id);
        return true;
    }

}