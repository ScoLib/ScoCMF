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

    protected $treeNodeParentIdName = 'pid';

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

    private function getAll()
    {
        return $this->orderBy('sort')->all();
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

    public function getParentTree($name)
    {
        return $this->getAncestors($this->getRouteInfoByName($name)->id);
    }

    public function saveRouteFile()
    {
        $list = $this->getValidRouteList();
        $routes = [];
        foreach ($list as $route) {
            $routes[] = [
                'name'       => $route->name,
                'uri'        => $route->uri,
                'action'     => $route->action,
                'method'     => $route->method,
                'middleware' => $route->middleware,
            ];
        }
        $content = "<?php \n"
                 . "\$routes = " . var_export($routes, true) . ";" . PHP_EOL
                 . "foreach (\$routes as \$route) {" . PHP_EOL
                 . "    if (empty(\$route['middleware'])) {" . PHP_EOL
                 . "        Route::\$route['method'](\$route['uri'], \$route['action'])->name(\$route['name']);" . PHP_EOL
                 . "    } else {" . PHP_EOL
                 . "        Route::\$route['method'](\$route['uri'], \$route['action'])->name(\$route['name'])->middleware(\$route['middleware']);" . PHP_EOL
                 . "    }" . PHP_EOL
                 . "}";
        file_put_contents(app_path('Http/routes.php'), $content);
    }

}