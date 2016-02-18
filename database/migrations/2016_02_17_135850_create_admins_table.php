<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('自增管理员ID');
            $table->string('username', 20)->comment('管理员名');
            $table->string('password', 60)->comment('密码');
            //$table->timestamp('login_time')->nullable()->comment('上次登录');
            $table->integer('group_id')->comment('权限组ID');
            $table->rememberToken()->comment('remember me');
            $table->timestamps();

            $table->unique('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admins');
    }
}
