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

        $database = file_get_contents(base_path('database/seeds') . '/' . 'rbac.sql');
        DB::connection()->getPdo()->exec($database);
    }
}
