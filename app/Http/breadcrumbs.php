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

foreach ($list as $item) {
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
}

