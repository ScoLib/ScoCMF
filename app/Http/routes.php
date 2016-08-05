<?php
// 登录页
$router->get('admin/login', 'Admin\Auth\AuthController@getLogin')
->name('admin.login')
->middleware(['guest:admin']);

// 登录提交
$router->post('admin/postLogin', 'Admin\Auth\AuthController@postLogin')
->name('admin.postLogin')
->middleware(['guest:admin']);

// 退出
$router->get('admin/logout', 'Admin\Auth\AuthController@logout')
->name('admin.logout');

// 控制台
$router->get('admin/', 'Admin\BaseController@index')
->name('admin.index')
->middleware(['auth:admin']);

// 路由管理
$router->get('admin/system/route', 'Admin\System\RouteController@getIndex')
->name('admin.system.route')
->middleware(['auth:admin']);

// 新增路由
$router->get('admin/system/route/add', 'Admin\System\RouteController@getAdd')
->name('admin.system.route.add')
->middleware(['auth:admin']);

// 提交新增路由
$router->post('admin/system/route/postAdd', 'Admin\System\RouteController@postAdd')
->name('admin.system.route.postAdd')
->middleware(['auth:admin']);

// 编辑路由
$router->get('admin/system/route/{id}/edit', 'Admin\System\RouteController@getEdit')
->name('admin.system.route.edit')
->middleware(['auth:admin']);

// 编辑路由提交
$router->post('admin/system/route/postEdit', 'Admin\System\RouteController@getEdit')
->name('admin.system.route.postEdit')
->middleware(['auth:admin']);

// 站点设置
$router->get('admin/system/site', 'Admin\System\SiteController@getIndex')
->name('admin.system.site')
->middleware(['auth:admin']);

// 保存设置
$router->post('admin/system/site/save', 'Admin\System\SiteController@postIndex')
->name('admin.system.site.save')
->middleware(['auth:admin']);

// 用户列表
$router->get('admin/user/index', 'Admin\User\IndexController@getIndex')
->name('admin.user.index')
->middleware(['auth:admin']);

