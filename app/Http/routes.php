<?php
//$routes = Repository::route()->getValidRouteList();
//var_export($routes->toArray());
//exit;
$routes =
    [
        0 =>
            [
                'id'          => 3,
                'pid'         => 1,
                'icon'        => '',
                'title'       => '登录页',
                'name'        => 'admin.login',
                'uri'         => 'admin/login',
                'action'      => 'Admin\\Auth\\AuthController@showLoginForm',
                'method'      => 'get',
                'is_menu'     => 1,
                'is_perm'     => 1,
                'sort'        => 1,
                'description' => '后台登录',
                'created_at'  => '2016-07-23 23:32:56',
                'updated_at'  => '2016-07-23 23:32:56',
            ],
        1 =>
            [
                'id'          => 4,
                'pid'         => 1,
                'icon'        => '',
                'title'       => '登录提交',
                'name'        => 'admin.postLogin',
                'uri'         => 'admin/postLogin',
                'action'      => 'Admin\\Auth\\AuthController@login',
                'method'      => 'post',
                'is_menu'     => 1,
                'is_perm'     => 1,
                'sort'        => 1,
                'description' => '登录提交',
                'created_at'  => '2016-07-23 23:32:56',
                'updated_at'  => '2016-07-23 23:32:56',
            ],
        2 =>
            [
                'id'          => 5,
                'pid'         => 1,
                'icon'        => '',
                'title'       => '退出',
                'name'        => 'admin.logout',
                'uri'         => 'admin/logout',
                'action'      => 'Admin\\Auth\\AuthController@logout',
                'method'      => 'get',
                'is_menu'     => 1,
                'is_perm'     => 1,
                'sort'        => 1,
                'description' => '退出',
                'created_at'  => '2016-07-23 23:32:56',
                'updated_at'  => '2016-07-23 23:32:56',
            ],
        3 =>
            [
                'id'          => 6,
                'pid'         => 1,
                'icon'        => '',
                'title'       => '控制台',
                'name'        => 'admin.index',
                'uri'         => 'admin/',
                'action'      => 'Admin\\BaseController@index',
                'method'      => 'get',
                'is_menu'     => 1,
                'is_perm'     => 1,
                'sort'        => 1,
                'description' => '控制台',
                'created_at'  => '2016-07-23 23:32:56',
                'updated_at'  => '2016-07-23 23:32:56',
            ],
        4 =>
            [
                'id'          => 8,
                'pid'         => 7,
                'icon'        => '',
                'title'       => '路由管理',
                'name'        => 'admin.system.route',
                'uri'         => 'admin/system/route',
                'action'      => 'Admin\\System\\RouteController@getIndex',
                'method'      => 'get',
                'is_menu'     => 1,
                'is_perm'     => 1,
                'sort'        => 1,
                'description' => '路由管理',
                'created_at'  => '2016-07-23 23:32:56',
                'updated_at'  => '2016-07-23 23:32:56',
            ],
        5 =>
            [
                'id'          => 9,
                'pid'         => 8,
                'icon'        => '',
                'title'       => '新增路由',
                'name'        => 'admin.system.route.add',
                'uri'         => 'admin/system/route/add',
                'action'      => 'Admin\\System\\RouteController@getAdd',
                'method'      => 'get',
                'is_menu'     => 1,
                'is_perm'     => 1,
                'sort'        => 1,
                'description' => '新增路由',
                'created_at'  => '2016-07-23 23:32:56',
                'updated_at'  => '2016-07-23 23:32:56',
            ],
        6 =>
            [
                'id'          => 10,
                'pid'         => 8,
                'icon'        => '',
                'title'       => '路由管理',
                'name'        => 'admin.system.route.edit',
                'uri'         => 'admin/system/route/edit/{id}',
                'action'      => 'Admin\\System\\RouteController@getEdit',
                'method'      => 'get',
                'is_menu'     => 1,
                'is_perm'     => 1,
                'sort'        => 1,
                'description' => '路由管理',
                'created_at'  => '2016-07-23 23:32:56',
                'updated_at'  => '2016-07-23 23:32:56',
            ],
    ];
foreach ($routes as $route) {
    Route::$route['method']($route['uri'], $route['action'])->name($route['name']);
}
/*
$routes = [
    [
        [
            //'prefix'     => 'admin',
            //'domain' => 'backend.scocmf.t',
            //'middleware' => ['web'],
            'namespace'  => 'Admin',
            //'as' => 'admin.'
        ],
        [
            ['get', 'admin/login', 'Auth\AuthController@showLoginForm'],
            ['post', 'admin/login', 'Auth\AuthController@login'],
            ['get', 'admin/logout', 'Auth\AuthController@logout'],
            ['get', 'admin/', 'BaseController@index'],

            ['get', 'admin/system/site', 'System\SiteController@getIndex'],
            ['post', 'admin/system/site', 'System\SiteController@postIndex'],
            ['get', 'admin/system/permission', 'System\PermissionController@getIndex'],
            ['get', 'admin/system/permission/add/role', 'System\PermissionController@getAddAdmin'],
            ['post', 'admin/system/permission/add/role', 'System\PermissionController@postAddAdmin'],
            ['get', 'admin/system/permission/edit/admin/{id}', 'System\PermissionController@getEditAdmin'],
            ['get', 'admin/system/permission/del/admin/{id}', 'System\PermissionController@delAdmin'],
            ['post', 'admin/system/permission/check', 'System\PermissionController@postCheck'],

            ['get', 'admin/system/route', 'System\RouteController@getIndex'],
            ['get', 'admin/system/route/add', 'System\RouteController@getAdd'],
        ],
    ],
    [
        [
            //'domain' => 'www.scocmf.t',
            //'middleware' => ['web'],
            //'namespace'  => 'Home'
        ],
        [
            //[
            //    'get', '/', function () {
            //    echo 'hello';
            //}
            //]
        ]
    ]
];

foreach ($routes as $route) {
    list($group, $list) = $route;
    Route::group($group, function () use ($list) {
        //Route::auth();
        foreach ($list as $item) {
            list($method, $uri, $controller) = $item;
            if ($uri == '/') {
                $name = 'index';
            } else {
                $name = str_replace('/', '.', $uri);
            }
            if ($name == 'admin.') {
                $name = 'admin.index';
            }

            Route::$method($uri, $controller)->name($name);


        }
    });
}*/

/*Route::group(['domain' => 'admin.scocmf.t', 'middleware' => ['web']], function () {
    Route::get('/', 'Backend\BackendController@welcome');
    Route::get('system', 'Backend\System\IndexController@index');
    Route::get('system/edit', 'Backend\System\IndexController@edit');
    Route::post('system/savesite', 'Backend\System\IndexController@saveSite');
});

Route::group(['domain' => 'www.scocmf.t', 'namespace' => 'Frontend'], function () {
    Route::get('/', function () {
        echo 'hello';

    });
});*/
