<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->engine = 'InnoDB COMMENT="路由表"';
            $table->increments('id')->comment('主键');
            $table->integer('pid')->comment('父ID');
            $table->string('icon', 100)->comment('图标class');
            $table->string('title', 200)->comment('路由标题');
            $table->string('name', 100)->comment('路由名称');
            $table->string('uri', 200)->comment('uri');
            $table->string('action', 255)->comment('控制方法');
            $table->enum('method', ['get', 'post', 'put', 'delete', 'patch', 'options', 'any'])->comment('请求方式');
            $table->tinyInteger('type')->comment('类型：0仅路由、1仅菜单、2菜单加权限')->default('0');
            $table->tinyInteger('sort')->comment('排序');
            $table->timestamps();
            $table->index('pid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('routes');
    }
}
