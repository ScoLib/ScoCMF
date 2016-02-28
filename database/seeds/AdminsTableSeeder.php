<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username'        => 'admin',
            'password'        => bcrypt('123456'),
            'group_id'        => 0,
            'updated_at'      => Carbon::now(),
            'created_at'      => Carbon::now(),
        ]);
    }
}
