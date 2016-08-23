/*
Navicat MySQL Data Transfer

Source Server         : 192.168.56.101
Source Server Version : 50711
Source Host           : 127.0.0.1:3306
Source Database       : scocmf

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-08-05 16:51:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Records of sco_role_user
-- ----------------------------
INSERT INTO `sco_role_user` VALUES ('1', '1');

-- ----------------------------
-- Records of sco_roles
-- ----------------------------
INSERT INTO `sco_roles` VALUES ('1', 'admin', '超级管理员', '', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_roles` VALUES ('2', 'test', '测试组', '', '2016-08-05 16:50:19', '2016-08-05 16:50:19');

-- ----------------------------
-- Records of sco_route_role
-- ----------------------------
INSERT INTO `sco_route_role` VALUES ('1', '1');
INSERT INTO `sco_route_role` VALUES ('2', '1');
INSERT INTO `sco_route_role` VALUES ('3', '1');
INSERT INTO `sco_route_role` VALUES ('4', '1');
INSERT INTO `sco_route_role` VALUES ('5', '1');
INSERT INTO `sco_route_role` VALUES ('6', '1');
INSERT INTO `sco_route_role` VALUES ('7', '1');
INSERT INTO `sco_route_role` VALUES ('8', '1');
INSERT INTO `sco_route_role` VALUES ('9', '1');
INSERT INTO `sco_route_role` VALUES ('10', '1');
INSERT INTO `sco_route_role` VALUES ('11', '1');
INSERT INTO `sco_route_role` VALUES ('12', '1');
INSERT INTO `sco_route_role` VALUES ('13', '1');
INSERT INTO `sco_route_role` VALUES ('14', '1');
INSERT INTO `sco_route_role` VALUES ('15', '1');
INSERT INTO `sco_route_role` VALUES ('16', '1');
INSERT INTO `sco_route_role` VALUES ('17', '1');
INSERT INTO `sco_route_role` VALUES ('18', '1');
INSERT INTO `sco_route_role` VALUES ('19', '1');
INSERT INTO `sco_route_role` VALUES ('20', '1');
INSERT INTO `sco_route_role` VALUES ('21', '1');
INSERT INTO `sco_route_role` VALUES ('22', '1');
INSERT INTO `sco_route_role` VALUES ('23', '1');
INSERT INTO `sco_route_role` VALUES ('24', '1');
INSERT INTO `sco_route_role` VALUES ('25', '1');
INSERT INTO `sco_route_role` VALUES ('26', '1');
INSERT INTO `sco_route_role` VALUES ('27', '1');
INSERT INTO `sco_route_role` VALUES ('28', '1');
INSERT INTO `sco_route_role` VALUES ('29', '1');
INSERT INTO `sco_route_role` VALUES ('30', '1');
INSERT INTO `sco_route_role` VALUES ('31', '1');
INSERT INTO `sco_route_role` VALUES ('32', '1');
INSERT INTO `sco_route_role` VALUES ('33', '1');
INSERT INTO `sco_route_role` VALUES ('34', '1');

-- ----------------------------
-- Records of sco_routes
-- ----------------------------
INSERT INTO `sco_routes` VALUES ('1', '0', '', '后台', 'admin', '#', '#', 'get', '', '1', '1', '1', '后台组', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('2', '0', '', '前台', 'home', '#', '#', 'get', '', '1', '1', '1', '前台组', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('3', '1', '', '登录页', 'admin.login', 'admin/login', 'Admin\\Auth\\AuthController@getLogin', 'get', 'web|guest:admin', '0', '1', '1', '后台登录', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('4', '1', '', '登录提交', 'admin.postLogin', 'admin/postLogin', 'Admin\\Auth\\AuthController@postLogin', 'post', 'web|guest:admin', '0', '1', '1', '登录提交', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('5', '1', '', '退出', 'admin.logout', 'admin/logout', 'Admin\\Auth\\AuthController@logout', 'get', 'web', '0', '1', '1', '退出', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('6', '1', 'fa-dashboard', '控制台', 'admin.index', 'admin/', 'Admin\\BaseController@index', 'get', 'web|auth:admin', '1', '1', '1', '控制台', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('7', '1', 'fa-edit', '系统管理', 'admin.system', '#', '#', 'get', '', '1', '1', '1', '后台组', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('8', '7', 'fa-link', '路由管理', 'admin.system.route', 'admin/system/route', 'Admin\\System\\RouteController@getIndex', 'get', 'web|auth:admin', '1', '1', '1', '路由管理', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('9', '8', '', '新增路由', 'admin.system.route.add', 'admin/system/route/add', 'Admin\\System\\RouteController@getAdd', 'get', 'web|auth:admin', '0', '1', '1', '新增路由', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('10', '8', '', '提交新增路由', 'admin.system.route.postAdd', 'admin/system/route/postAdd', 'Admin\\System\\RouteController@postAdd', 'post', 'web|auth:admin', '0', '1', '1', '提交新增路由', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('11', '8', '', '编辑路由', 'admin.system.route.edit', 'admin/system/route/{id}/edit', 'Admin\\System\\RouteController@getEdit', 'get', 'web|auth:admin', '0', '1', '1', '编辑路由', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('12', '8', '', '提交编辑路由', 'admin.system.route.postEdit', 'admin/system/route/{id}/edit', 'Admin\\System\\RouteController@postEdit', 'post', 'web|auth:admin', '0', '1', '1', '编辑路由提交', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('13', '7', 'fa-gear', '站点设置', 'admin.system.site', 'admin/system/site', 'Admin\\System\\SiteController@getIndex', 'get', 'web|auth:admin', '1', '1', '1', '站点设置', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('14', '13', '', '保存设置', 'admin.system.site.save', 'admin/system/site/save', 'Admin\\System\\SiteController@postIndex', 'post', 'web|auth:admin', '0', '1', '1', '保存站点设置', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('15', '1', '', '用户管理', 'admin.users', '#', '#', 'get', '', '1', '1', '1', '用户管理', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('16', '15', 'fa-user', '用户列表', 'admin.users.user', 'admin/users/user', 'Admin\\Users\\UserController@getIndex', 'get', 'web|auth:admin', '1', '1', '1', '用户列表', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('17', '15', 'fa-users', '角色管理', 'admin.users.role', 'admin/users/role', 'Admin\\Users\\RoleController@getIndex', 'get', 'web|auth:admin', '1', '1', '1', '用户列表', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('18', '16', '', '添加用户', 'admin.users.user.add', 'admin/users/user/add', 'Admin\\Users\\UserController@getAdd', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-11 15:19:32', '2016-08-11 15:19:32');
INSERT INTO `sco_routes` VALUES ('19', '16', '', '编辑用户', 'admin.users.user.edit', 'admin/users/user/{uid}/edit', 'Admin\\Users\\UserController@getEdit', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-11 16:05:06', '2016-08-11 16:05:06');
INSERT INTO `sco_routes` VALUES ('20', '16', '', '提交添加用户', 'admin.users.user.postAdd', 'admin/users/user/postAdd', 'Admin\\Users\\UserController@postAdd', 'post', 'web|auth:admin', '0', '1', '0', '', '2016-08-11 16:39:43', '2016-08-11 16:39:43');
INSERT INTO `sco_routes` VALUES ('21', '16', '', '提交编辑用户', 'admin.users.user.postEdit', 'admin/users/user/{uid}/edit', 'Admin\\Users\\UserController@postEdit', 'post', 'web|auth:admin', '0', '1', '0', '', '2016-08-11 16:39:43', '2016-08-11 16:39:43');
INSERT INTO `sco_routes` VALUES ('22', '16', '', '删除用户', 'admin.users.user.delete', 'admin/users/user/{uid}/delete', 'Admin\\Users\\UserController@getDelete', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-18 14:43:03', '2016-08-18 14:43:03');
INSERT INTO `sco_routes` VALUES ('23', '8', '', '删除路由', 'admin.system.route.delete', 'admin/system/route/{id}/delete', 'Admin\\System\\RouteController@getDelete', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-18 15:22:22', '2016-08-18 15:22:22');
INSERT INTO `sco_routes` VALUES ('24', '17', '', '新增角色', 'admin.users.role.add', 'admin/users/role/add', 'Admin\\Users\\RoleController@getAdd', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_routes` VALUES ('25', '17', '', '提交新增角色', 'admin.users.role.postAdd', 'admin/users/role/postAdd', 'Admin\\Users\\RoleController@postAdd', 'post', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_routes` VALUES ('26', '17', '', '编辑角色', 'admin.users.role.edit', 'admin/users/role/{id}/edit', 'Admin\\Users\\RoleController@getEdit', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_routes` VALUES ('27', '17', '', '提交编辑角色', 'admin.users.role.postEdit', 'admin/users/role/{id}/edit', 'Admin\\Users\\RoleController@postEdit', 'post', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_routes` VALUES ('28', '17', '', '角色授权', 'admin.users.role.authorize', 'admin/users/role/{id}/authorize', 'Admin\\Users\\RoleController@getAuthorize', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_routes` VALUES ('29', '17', '', '删除角色', 'admin.users.role.delete', 'admin/users/role/{id}/delete', 'Admin\\Users\\RoleController@getDelete', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_routes` VALUES ('30', '17', '', '提交角色授权', 'admin.users.role.postAuthorize', 'admin/users/role/{id}/authorize', 'Admin\\Users\\RoleController@postAuthorize', 'post', 'web|auth:admin', '0', '1', '0', '', '2016-08-23 11:18:46', '2016-08-23 11:18:49');
