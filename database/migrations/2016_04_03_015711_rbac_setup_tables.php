<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RbacSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('roles', function (Blueprint $table) {
            $table->engine = "InnoDB COMMENT='角色表'";
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('role_user', function (Blueprint $table) {
            $table->engine = "InnoDB COMMENT='角色与用户对应表'";
            $table->integer('uid')->unsigned();
            $table->integer('role_id')->unsigned();

            /*$table->foreign('uid')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');*/

            $table->primary(['uid', 'role_id']);
        });

        // Create table for storing permissions
        Schema::create('routes', function (Blueprint $table) {
            $table->engine = "InnoDB COMMENT='路由（权限）表'";
            //$table->increments('id');
            //$table->string('name')->unique();
            //$table->string('display_name')->nullable();
            //$table->string('description')->nullable();
            //$table->timestamps();


            $table->increments('id')->comment('主键');
            $table->integer('pid')->comment('父ID');
            $table->string('icon', 100)->comment('图标class');
            $table->string('title', 200)->comment('路由标题');
            $table->string('name', 100)->comment('路由名称');
            $table->string('uri', 200)->comment('uri');
            $table->string('action', 255)->comment('控制方法');
            $table->enum('method', ['get', 'post', 'put', 'delete', 'patch', 'options', 'any'])
                  ->comment('请求方式')->default('get');
            $table->string('middleware', 500)->comment('中间件');
            $table->tinyInteger('is_menu')->comment('是否作为菜单')->default('1');
            $table->tinyInteger('is_perm')->comment('是否作为权限')->default('1');
            $table->tinyInteger('sort')->comment('排序');
            $table->string('description')->nullable()->comment('描述');
            $table->timestamps();
            $table->index('pid');



        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('route_role', function (Blueprint $table) {
            $table->engine = "InnoDB COMMENT='路由（权限）与角色对应表'";
            $table->integer('route_id')->unsigned();
            $table->integer('role_id')->unsigned();

            /*$table->foreign('route_id')->references('id')->on('routes')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');*/

            $table->primary(['route_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('route_role');
        Schema::drop('routes');
        Schema::drop('role_user');
        Schema::drop('roles');
    }
}
