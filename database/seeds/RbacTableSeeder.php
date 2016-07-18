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

        /*DB::table('routes')->insert([
            [
                'id'          => 1,
                'pid'         => 0,
                'icon'        => '',
                'title'       => '后台',
                'name'        => 'admin',
                'uri'         => '#',
                //'action'      => '',
                //'method'      => '',
                'type'        => '1',
                'sort'        => '1',
                'description' => '后台组',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'id'          => 2,
                'pid'         => 1,
                'icon'        => '',
                'title'       => '登录',
                'name'        => 'admin.login',
                'uri'         => 'admin/login',
                'action'      => '',
                'method'      => 'get',
                'type'        => '0',
                'sort'        => '1',
                'description' => '后台登录',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'pid'         => 2,
                'icon'        => '',
                'title'       => '系统',
                'name'        => 'admin',
                'uri'         => '#',
                //'action'      => '',
                //'method'      => '',
                'type'        => '1',
                'sort'        => '1',
                'description' => '系统组',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
        ]);*/
    }
}
