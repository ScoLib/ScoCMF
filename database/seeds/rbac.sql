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

-- ----------------------------
-- Records of sco_routes
-- ----------------------------
INSERT INTO `sco_routes` VALUES ('1', '0', '', '后台', 'admin', '#', '#', 'get', '', '1', '1', '1', '后台组', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('2', '0', '', '前台', 'home', '#', '#', 'get', '', '1', '1', '1', '前台组', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('3', '1', '', '登录页', 'admin.login', 'admin/login', 'Admin\\Auth\\AuthController@getLogin', 'get', 'guest:admin', '0', '1', '1', '后台登录', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('4', '1', '', '登录提交', 'admin.postLogin', 'admin/postLogin', 'Admin\\Auth\\AuthController@postLogin', 'post', 'guest:admin', '0', '1', '1', '登录提交', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('5', '1', '', '退出', 'admin.logout', 'admin/logout', 'Admin\\Auth\\AuthController@logout', 'get', '', '0', '1', '1', '退出', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('6', '1', 'fa-dashboard', '控制台', 'admin.index', 'admin/', 'Admin\\BaseController@index', 'get', 'auth:admin', '1', '1', '1', '控制台', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('7', '1', 'fa-edit', '系统管理', 'admin.system', '#', '#', 'get', '', '1', '1', '1', '后台组', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('8', '7', 'fa-link', '路由管理', 'admin.system.route', 'admin/system/route', 'Admin\\System\\RouteController@getIndex', 'get', 'auth:admin', '1', '1', '1', '路由管理', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('9', '8', '', '新增路由', 'admin.system.route.add', 'admin/system/route/add', 'Admin\\System\\RouteController@getAdd', 'get', 'auth:admin', '0', '1', '1', '新增路由', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('10', '8', '', '提交新增路由', 'admin.system.route.postAdd', 'admin/system/route/postAdd', 'Admin\\System\\RouteController@postAdd', 'post', 'auth:admin', '0', '1', '1', '提交新增路由', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('11', '8', '', '编辑路由', 'admin.system.route.edit', 'admin/system/route/{id}/edit', 'Admin\\System\\RouteController@getEdit', 'get', 'auth:admin', '0', '1', '1', '编辑路由', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('12', '8', '', '编辑路由提交', 'admin.system.route.postEdit', 'admin/system/route/{id}/edit', 'Admin\\System\\RouteController@postEdit', 'post', 'auth:admin', '0', '1', '1', '编辑路由提交', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('13', '7', 'fa-gear', '站点设置', 'admin.system.site', 'admin/system/site', 'Admin\\System\\SiteController@getIndex', 'get', 'auth:admin', '1', '1', '1', '站点设置', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('14', '13', '', '保存设置', 'admin.system.site.save', 'admin/system/site/save', 'Admin\\System\\SiteController@postIndex', 'post', 'auth:admin', '0', '1', '1', '保存站点设置', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('15', '1', 'fa-users', '用户管理', 'admin.user', '#', '#', 'get', '', '1', '1', '1', '用户管理', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_routes` VALUES ('16', '15', 'fa-user', '用户列表', 'admin.user.index', 'admin/user/index', 'Admin\\User\\IndexController@getIndex', 'get', 'auth:admin', '1', '1', '1', '用户列表', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
