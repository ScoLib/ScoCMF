<?php 
$routes = array (
  0 => 
  array (
    'name' => 'admin.login',
    'uri' => 'admin/login',
    'action' => 'Admin\\Auth\\AuthController@showLoginForm',
    'method' => 'get',
    'middleware' => 'guest:admin',
  ),
  1 => 
  array (
    'name' => 'admin.login',
    'uri' => 'admin/login',
    'action' => 'Admin\\Auth\\AuthController@login',
    'method' => 'post',
    'middleware' => 'guest:admin',
  ),
  2 => 
  array (
    'name' => 'admin.logout',
    'uri' => 'admin/logout',
    'action' => 'Admin\\Auth\\AuthController@logout',
    'method' => 'get',
    'middleware' => '',
  ),
  3 => 
  array (
    'name' => 'admin.index',
    'uri' => 'admin/',
    'action' => 'Admin\\BaseController@index',
    'method' => 'get',
    'middleware' => 'auth:admin',
  ),
  4 => 
  array (
    'name' => 'admin.system.route',
    'uri' => 'admin/system/route',
    'action' => 'Admin\\System\\RouteController@getIndex',
    'method' => 'get',
    'middleware' => 'auth:admin',
  ),
  5 => 
  array (
    'name' => 'admin.system.route.add',
    'uri' => 'admin/system/route/add',
    'action' => 'Admin\\System\\RouteController@getAdd',
    'method' => 'get',
    'middleware' => 'auth:admin',
  ),
  6 => 
  array (
    'name' => 'admin.system.route.postAdd',
    'uri' => 'admin/system/route/postAdd',
    'action' => 'Admin\\System\\RouteController@postAdd',
    'method' => 'get',
    'middleware' => 'auth:admin',
  ),
  7 => 
  array (
    'name' => 'admin.system.route.edit',
    'uri' => 'admin/system/route/edit/{id}',
    'action' => 'Admin\\System\\RouteController@getEdit',
    'method' => 'get',
    'middleware' => 'auth:admin',
  ),
  8 => 
  array (
    'name' => 'admin.system.route.postEdit',
    'uri' => 'admin/system/route/postEdit',
    'action' => 'Admin\\System\\RouteController@getEdit',
    'method' => 'get',
    'middleware' => 'auth:admin',
  ),
);
foreach ($routes as $route) {
    if (empty($route['middleware'])) {
        Route::$route['method']($route['uri'], $route['action'])->name($route['name']);
    } else {
        Route::$route['method']($route['uri'], $route['action'])->name($route['name'])->middleware($route['middleware']);
    }
}