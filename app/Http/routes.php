<?php
$routes = [
    [
        [
            'prefix'     => 'backend',
            //'domain' => 'backend.scocmf.t',
            'middleware' => ['web'],
            'namespace'  => 'Backend',
            'as' => 'backend.'
        ],
        [
            ['get', 'login', 'AuthController@getLogin'],
            ['post', 'login', 'AuthController@postLogin'],
            ['get', 'logout', 'AuthController@getLogout'],
            ['get', '/', 'BackendController@welcome'],
            ['get', 'system', 'System\IndexController@getIndex'],
            ['post', 'system', 'System\IndexController@postIndex'],
            ['get', 'system/admin', 'System\AdminController@getIndex'],
            ['get', 'system/admin/add/admin', 'System\AdminController@getAddAdmin'],
            ['post', 'system/admin/add/admin', 'System\AdminController@postAddAdmin'],
            ['get', 'system/admin/edit/admin/{id}', 'System\AdminController@getEditAdmin'],
            ['post', 'system/admin/check', 'System\AdminController@postCheck'],
        ],
    ],
    [
        [
            'domain' => 'www.scocmf.t',
            'middleware' => ['web'],
            'namespace'  => 'Frontend'
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
