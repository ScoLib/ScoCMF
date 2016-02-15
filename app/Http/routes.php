<?php
$routes = [
    [
        //'prefix' => 'admin',
        'domain' => 'admin.scocmf.t',
        'list' => [
            [
                'method' => 'get',
                'uri' => '/',
                'controller' => 'Backend\BackendController@welcome',
            ],
            [
                'method' => 'get',
                'uri' => 'system',
                'controller' => 'Backend\System\IndexController@index',
            ],
            [
                'method' => 'post',
                'uri' => 'system/savesite',
                'controller' => 'Backend\System\IndexController@saveSite',
            ],
            [
                'method' => 'get',
                'uri' => 'system/edit',
                'controller' => 'Backend\System\IndexController@edit',
            ]
        ]
    ]
];

foreach ($routes as $route) {
    $group = [];
    if (isset($route['prefix'])) {
        $group['prefix'] = $route['prefix'];
    } elseif (isset($route['domain'])) {
        $group['domain'] = $route['domain'];
    }

    $group['middleware'] = ['web'];
    $list = $route['list'];
    Route::group($group, function () use ($list) {
        foreach ($list as $item) {
            $method = $item['method'];
            Route::$method($item['uri'], $item['controller']);
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
