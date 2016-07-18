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
            ['get', 'admin/index', 'BaseController@welcome'],
            ['get', 'admin/system/site', 'System\SiteController@getIndex'],
            ['post', 'admin/system/site', 'System\SiteController@postIndex'],
            ['get', 'admin/system/auth', 'System\AuthController@getIndex'],
            ['get', 'admin/system/auth/add/admin', 'System\AuthController@getAddAdmin'],
            ['post', 'admin/system/auth/add/admin', 'System\AuthController@postAddAdmin'],
            ['get', 'admin/system/auth/edit/admin/{id}', 'System\AuthController@getEditAdmin'],
            ['get', 'admin/system/auth/del/admin/{id}', 'System\AuthController@delAdmin'],
            ['post', 'admin/system/auth/check', 'System\AuthController@postCheck'],
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
