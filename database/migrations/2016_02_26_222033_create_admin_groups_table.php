<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_groups', function (Blueprint $table) {
            $table->engine = "InnoDB COMMENT='权限组表'";
            $table->increments('group_id')->comment('权限组ID');
            $table->string('group_name', 20)->comment('权限组名称');
            $table->text('limits')->comment('权限内容');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admin_groups');
    }
}
