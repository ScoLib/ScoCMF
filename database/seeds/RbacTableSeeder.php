<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RbacTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insertGetId([
            'username'   => 'admin',
            'email'      => 'admin@admin.com',
            'password'   => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('roles')->insert([
            [
                'name'         => 'admin',
                'display_name' => '超级管理员',
                'description'  => '',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'name'         => 'test',
                'display_name' => '测试组',
                'description'  => '',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ]
        ]);

        DB::table('role_user')->insert([
            'uid'     => 1,
            'role_id' => 1,
        ]);

        DB::table('routes')->insert([
            [
                'id'          => 1,
                'pid'         => 0,
                'icon'        => '',
                'title'       => '后台',
                'name'        => 'admin',
                'uri'         => '#',
                'action'      => '#',
                'method'      => 'get',
                'is_menu'     => '1',
                'is_perm'     => '1',
                'sort'        => '1',
                'description' => '后台组',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'id'          => 2,
                'pid'         => 0,
                'icon'        => '',
                'title'       => '前台',
                'name'        => 'home',
                'uri'         => '#',
                'action'      => '#',
                'method'      => 'get',
                'is_menu'     => '1',
                'is_perm'     => '1',
                'sort'        => '1',
                'description' => '前台组',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'id'          => 3,
                'pid'         => 1,
                'icon'        => '',
                'title'       => '系统',
                'name'        => 'system',
                'uri'         => '#',
                'action'      => '#',
                'method'      => 'get',
                'is_menu'     => '1',
                'is_perm'     => '1',
                'sort'        => '1',
                'description' => '后台组',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'id'          => 4,
                'pid'         => 3,
                'icon'        => '',
                'title'       => '路由管理',
                'name'        => 'admin.system.route',
                'uri'         => 'admin/system/route',
                'action'      => 'Admin\\System\\RouteController@getIndex',
                'method'      => 'get',
                'is_menu'     => '1',
                'is_perm'     => '1',
                'sort'        => '1',
                'description' => '路由管理',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'id'          => 5,
                'pid'         => 1,
                'icon'        => '',
                'title'       => '登录页',
                'name'        => 'admin.login',
                'uri'         => 'admin/login',
                'action'      => 'Admin\\Auth\\AuthController@showLoginForm',
                'method'      => 'get',
                'is_menu'     => '1',
                'is_perm'     => '1',
                'sort'        => '1',
                'description' => '后台登录',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'id'          => 6,
                'pid'         => 1,
                'icon'        => '',
                'title'       => '登录提交',
                'name'        => 'admin.login',
                'uri'         => 'admin/login',
                'action'      => 'Admin\\Auth\\AuthController@login',
                'method'      => 'post',
                'is_menu'     => '1',
                'is_perm'     => '1',
                'sort'        => '1',
                'description' => '登录提交',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'id'          => 7,
                'pid'         => 1,
                'icon'        => '',
                'title'       => '退出',
                'name'        => 'admin.logout',
                'uri'         => 'admin/logout',
                'action'      => 'Admin\\Auth\\AuthController@logout',
                'method'      => 'get',
                'is_menu'     => '1',
                'is_perm'     => '1',
                'sort'        => '1',
                'description' => '退出',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'id'          => 8,
                'pid'         => 1,
                'icon'        => '',
                'title'       => '控制台',
                'name'        => 'admin.index',
                'uri'         => 'admin/',
                'action'      => 'Admin\\BaseController@index',
                'method'      => 'get',
                'is_menu'     => '1',
                'is_perm'     => '1',
                'sort'        => '1',
                'description' => '控制台',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
        ]);
    }
}
