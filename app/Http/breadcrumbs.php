<?php
$list = [
    [
        'name' => 'admin',
        'title' => '后台',
        'uri' => 'admin.index'
    ],
    [
        'parent' => 'admin',
        'name' => 'admin.index',
        'title' => '控制台',
        //'uri' => 'admin.index'
    ],
    [
        'parent' => 'admin',
        'name' => 'admin.system',
        'title' => '系统管理',
        //'uri' => 'admin.index'
    ],
    [
        'parent' => 'admin.system',
        'name' => 'admin.system.site',
        'title' => '站点设置',
        'uri' => 'admin.system.site'
    ],
    [
        'parent' => 'admin.system',
        'name' => 'admin.system.route',
        'title' => '路由管理',
        'uri' => 'admin.system.route'
    ]
];

$routes = Repository::route()->getRouteTreeList();
//dd($routes);
foreach ($routes as $route) {
    if ($route->pid) {
        $route->parent = $routes->get($route->pid);
    }
//dump($route);
    //var_dump($route->has('parent'));
    Breadcrumbs::register($route->name, function ($breadcrumbs) use ($route)
    {
        if (isset($route->parent)) {
            $breadcrumbs->parent($route->parent->name);
        }
        if ($route->pid == 0) {
            $name = $route->name . '.index';
        } else {
            $name = $route->uri == '#' ? '' : $route->name;
        }


        if (empty($name)) {
            $breadcrumbs->push($route->title);
        } else {
            $breadcrumbs->push($route->title, route($name));
        }
    });
}
/*foreach ($list as $item) {
    Breadcrumbs::register($item['name'], function($breadcrumbs) use ($item)
    {
        if (!empty($item['parent'])) {
            $breadcrumbs->parent($item['parent']);
        }

        if (empty($item['uri'])) {
            $breadcrumbs->push($item['title']);
        } else {
            $breadcrumbs->push($item['title'], route($item['uri']));
        }
    });
}*/

