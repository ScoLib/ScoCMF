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
-- Records of sco_permission_role
-- ----------------------------
INSERT INTO `sco_permission_role` VALUES ('1', '1');
INSERT INTO `sco_permission_role` VALUES ('2', '1');
INSERT INTO `sco_permission_role` VALUES ('3', '1');
INSERT INTO `sco_permission_role` VALUES ('4', '1');
INSERT INTO `sco_permission_role` VALUES ('5', '1');
INSERT INTO `sco_permission_role` VALUES ('6', '1');
INSERT INTO `sco_permission_role` VALUES ('7', '1');
INSERT INTO `sco_permission_role` VALUES ('8', '1');
INSERT INTO `sco_permission_role` VALUES ('9', '1');
INSERT INTO `sco_permission_role` VALUES ('10', '1');
INSERT INTO `sco_permission_role` VALUES ('11', '1');
INSERT INTO `sco_permission_role` VALUES ('12', '1');
INSERT INTO `sco_permission_role` VALUES ('13', '1');
INSERT INTO `sco_permission_role` VALUES ('14', '1');
INSERT INTO `sco_permission_role` VALUES ('15', '1');
INSERT INTO `sco_permission_role` VALUES ('16', '1');
INSERT INTO `sco_permission_role` VALUES ('17', '1');
INSERT INTO `sco_permission_role` VALUES ('18', '1');
INSERT INTO `sco_permission_role` VALUES ('19', '1');
INSERT INTO `sco_permission_role` VALUES ('20', '1');
INSERT INTO `sco_permission_role` VALUES ('21', '1');
INSERT INTO `sco_permission_role` VALUES ('22', '1');
INSERT INTO `sco_permission_role` VALUES ('23', '1');
INSERT INTO `sco_permission_role` VALUES ('24', '1');
INSERT INTO `sco_permission_role` VALUES ('25', '1');
INSERT INTO `sco_permission_role` VALUES ('26', '1');
INSERT INTO `sco_permission_role` VALUES ('27', '1');
INSERT INTO `sco_permission_role` VALUES ('28', '1');
INSERT INTO `sco_permission_role` VALUES ('29', '1');
INSERT INTO `sco_permission_role` VALUES ('30', '1');
INSERT INTO `sco_permission_role` VALUES ('31', '1');
INSERT INTO `sco_permission_role` VALUES ('32', '1');
INSERT INTO `sco_permission_role` VALUES ('33', '1');
INSERT INTO `sco_permission_role` VALUES ('34', '1');


-- ----------------------------
-- Records of sco_permissions
-- ----------------------------
INSERT INTO `sco_permissions` VALUES ('1', '0', 'fa-dashboard', '控制台', 'admin.index', '1', '1', '控制台', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_permissions` VALUES ('2', '0', 'fa-edit', '系统管理', '#', '1', '1', '系统管理', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_permissions` VALUES ('3', '2', 'fa-gear', '站点设置', 'admin.system.site', '1', '1', '站点设置', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_permissions` VALUES ('4', '3', '', '保存设置', 'admin.system.site.save', '0', '1', '保存设置', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_permissions` VALUES ('5', '2', 'fa-link', '后台菜单', 'admin.system.menu', '1', '1', null, '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_permissions` VALUES ('6', '5', '', '添加菜单', 'admin.system.menu.add', '0', '1', null, '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_permissions` VALUES ('7', '5', ' ', '保存菜单', 'admin.system.menu.postAdd', '0', '1', null, '2016-08-05 16:50:19', '2016-08-05 16:50:19');




INSERT INTO `sco_permissions` VALUES ('11', '8', '', '编辑路由', 'admin.system.route.edit', 'admin/system/route/{id}/edit', 'Admin\\System\\RouteController@getEdit', 'get', 'web|auth:admin', '0', '1', '1', '编辑路由', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_permissions` VALUES ('12', '8', '', '保存编辑路由', 'admin.system.route.postEdit', 'admin/system/route/{id}/edit', 'Admin\\System\\RouteController@postEdit', 'post', 'web|auth:admin', '0', '1', '1', '编辑路由保存', '2016-08-05 16:50:19', '2016-08-05 16:50:19');

INSERT INTO `sco_permissions` VALUES ('15', '1', '', '用户管理', 'admin.users', '#', '#', 'get', '', '1', '1', '1', '用户管理', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_permissions` VALUES ('16', '15', 'fa-user', '用户列表', 'admin.users.user', 'admin/users/user', 'Admin\\Users\\UserController@getIndex', 'get', 'web|auth:admin', '1', '1', '1', '用户列表', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_permissions` VALUES ('17', '15', 'fa-users', '角色管理', 'admin.users.role', 'admin/users/role', 'Admin\\Users\\RoleController@getIndex', 'get', 'web|auth:admin', '1', '1', '1', '用户列表', '2016-08-05 16:50:19', '2016-08-05 16:50:19');
INSERT INTO `sco_permissions` VALUES ('18', '16', '', '添加用户', 'admin.users.user.add', 'admin/users/user/add', 'Admin\\Users\\UserController@getAdd', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-11 15:19:32', '2016-08-11 15:19:32');
INSERT INTO `sco_permissions` VALUES ('19', '16', '', '编辑用户', 'admin.users.user.edit', 'admin/users/user/{uid}/edit', 'Admin\\Users\\UserController@getEdit', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-11 16:05:06', '2016-08-11 16:05:06');
INSERT INTO `sco_permissions` VALUES ('20', '16', '', '保存添加用户', 'admin.users.user.postAdd', 'admin/users/user/postAdd', 'Admin\\Users\\UserController@postAdd', 'post', 'web|auth:admin', '0', '1', '0', '', '2016-08-11 16:39:43', '2016-08-11 16:39:43');
INSERT INTO `sco_permissions` VALUES ('21', '16', '', '保存编辑用户', 'admin.users.user.postEdit', 'admin/users/user/{uid}/edit', 'Admin\\Users\\UserController@postEdit', 'post', 'web|auth:admin', '0', '1', '0', '', '2016-08-11 16:39:43', '2016-08-11 16:39:43');
INSERT INTO `sco_permissions` VALUES ('22', '16', '', '删除用户', 'admin.users.user.delete', 'admin/users/user/{uid}/delete', 'Admin\\Users\\UserController@getDelete', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-18 14:43:03', '2016-08-18 14:43:03');
INSERT INTO `sco_permissions` VALUES ('23', '8', '', '删除路由', 'admin.system.route.delete', 'admin/system/route/{id}/delete', 'Admin\\System\\RouteController@getDelete', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-18 15:22:22', '2016-08-18 15:22:22');
INSERT INTO `sco_permissions` VALUES ('24', '17', '', '新增角色', 'admin.users.role.add', 'admin/users/role/add', 'Admin\\Users\\RoleController@getAdd', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_permissions` VALUES ('25', '17', '', '保存新增角色', 'admin.users.role.postAdd', 'admin/users/role/postAdd', 'Admin\\Users\\RoleController@postAdd', 'post', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_permissions` VALUES ('26', '17', '', '编辑角色', 'admin.users.role.edit', 'admin/users/role/{id}/edit', 'Admin\\Users\\RoleController@getEdit', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_permissions` VALUES ('27', '17', '', '保存编辑角色', 'admin.users.role.postEdit', 'admin/users/role/{id}/edit', 'Admin\\Users\\RoleController@postEdit', 'post', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_permissions` VALUES ('28', '17', '', '角色授权', 'admin.users.role.authorize', 'admin/users/role/{id}/authorize', 'Admin\\Users\\RoleController@getAuthorize', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_permissions` VALUES ('29', '17', '', '删除角色', 'admin.users.role.delete', 'admin/users/role/{id}/delete', 'Admin\\Users\\RoleController@getDelete', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-08-19 17:20:39', '2016-08-19 17:20:39');
INSERT INTO `sco_permissions` VALUES ('30', '17', '', '保存角色授权', 'admin.users.role.postAuthorize', 'admin/users/role/{id}/authorize', 'Admin\\Users\\RoleController@postAuthorize', 'post', 'web|auth:admin', '0', '1', '0', '', '2016-08-23 11:18:46', '2016-08-23 11:18:49');
INSERT INTO `sco_permissions` VALUES ('31', '8', '', '刷新路由文件', 'admin.system.route.refresh', 'admin/system/route/refresh', 'Admin\\System\\RouteController@getRefresh', 'get', 'web|auth:admin', '0', '1', '0', '', '2016-09-05 16:51:43', '2016-09-05 16:51:43');
