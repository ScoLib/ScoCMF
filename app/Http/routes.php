<?php
// 添加用户
Route::get('admin/users/user/add', 'Admin\Users\UserController@getAdd')
->name('admin.users.user.add')
->middleware(['web','auth:admin']);

// 编辑用户
Route::get('admin/users/user/{uid}/edit', 'Admin\Users\UserController@getEdit')
->name('admin.users.user.edit')
->middleware(['web','auth:admin']);

// 提交添加用户
Route::post('admin/users/user/postAdd', 'Admin\Users\UserController@postAdd')
->name('admin.users.user.postAdd')
->middleware(['web','auth:admin']);

// 提交编辑用户
Route::post('admin/users/user/{uid}/edit', 'Admin\Users\UserController@postEdit')
->name('admin.users.user.postEdit')
->middleware(['web','auth:admin']);

// 删除用户
Route::get('admin/users/user/{uid}/delete', 'Admin\Users\UserController@getDelete')
->name('admin.users.user.delete')
->middleware(['web','auth:admin']);

// 删除路由
Route::get('admin/system/route/{id}/delete', 'Admin\System\RouteController@getDelete')
->name('admin.system.route.delete')
->middleware(['web','auth:admin']);

// 新增角色
Route::get('admin/users/role/add', 'Admin\Users\RoleController@getAdd')
->name('admin.users.role.add')
->middleware(['web','auth:admin']);

// 提交新增角色
Route::post('admin/users/role/postAdd', 'Admin\Users\RoleController@postAdd')
->name('admin.users.role.postAdd')
->middleware(['web','auth:admin']);

// 编辑角色
Route::get('admin/users/role/{id}/edit', 'Admin\Users\RoleController@getEdit')
->name('admin.users.role.edit')
->middleware(['web','auth:admin']);

// 提交编辑角色
Route::post('admin/users/role/{id}/edit', 'Admin\Users\RoleController@postEdit')
->name('admin.users.role.postEdit')
->middleware(['web','auth:admin']);

// 角色授权
Route::get('admin/users/role/{id}/authorize', 'Admin\Users\RoleController@getAuthorize')
->name('admin.users.role.authorize')
->middleware(['web','auth:admin']);

// 删除角色
Route::get('admin/users/role/{id}/delete', 'Admin\Users\RoleController@getDelete')
->name('admin.users.role.delete')
->middleware(['web','auth:admin']);

// 登录页
Route::get('admin/login', 'Admin\Auth\AuthController@getLogin')
->name('admin.login')
->middleware(['web','guest:admin']);

// 登录提交
Route::post('admin/postLogin', 'Admin\Auth\AuthController@postLogin')
->name('admin.postLogin')
->middleware(['web','guest:admin']);

// 退出
Route::get('admin/logout', 'Admin\Auth\AuthController@logout')
->name('admin.logout')
->middleware(['web']);

// 控制台
Route::get('admin/', 'Admin\BaseController@index')
->name('admin.index')
->middleware(['web','auth:admin']);

// 路由管理
Route::get('admin/system/route', 'Admin\System\RouteController@getIndex')
->name('admin.system.route')
->middleware(['web','auth:admin']);

// 新增路由
Route::get('admin/system/route/add', 'Admin\System\RouteController@getAdd')
->name('admin.system.route.add')
->middleware(['web','auth:admin']);

// 提交新增路由
Route::post('admin/system/route/postAdd', 'Admin\System\RouteController@postAdd')
->name('admin.system.route.postAdd')
->middleware(['web','auth:admin']);

// 编辑路由
Route::get('admin/system/route/{id}/edit', 'Admin\System\RouteController@getEdit')
->name('admin.system.route.edit')
->middleware(['web','auth:admin']);

// 提交编辑路由
Route::post('admin/system/route/{id}/edit', 'Admin\System\RouteController@postEdit')
->name('admin.system.route.postEdit')
->middleware(['web','auth:admin']);

// 站点设置
Route::get('admin/system/site', 'Admin\System\SiteController@getIndex')
->name('admin.system.site')
->middleware(['web','auth:admin']);

// 保存设置
Route::post('admin/system/site/save', 'Admin\System\SiteController@postIndex')
->name('admin.system.site.save')
->middleware(['web','auth:admin']);

// 用户列表
Route::get('admin/users/user', 'Admin\Users\UserController@getIndex')
->name('admin.users.user')
->middleware(['web','auth:admin']);

// 角色管理
Route::get('admin/users/role', 'Admin\Users\RoleController@getIndex')
->name('admin.users.role')
->middleware(['web','auth:admin']);

