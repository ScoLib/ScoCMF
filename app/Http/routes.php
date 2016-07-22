<?php
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
            ['get', 'admin/', 'BaseController@dashboard'],

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
}

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
