<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLaravels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->default('')->comment('名称');
            $table->string('mobile', 32)->default('')->comment('手机号');
            $table->integer('age')->default(0)->comment('年龄');
            $table->tinyInteger('sex')->default(1)->comment('性别：1 男，2 女');
            $table->string('note')->default('')->comment('备注');
            $table->string('email')->default('')->comment('邮箱');
            $table->string('password')->default('')->comment('密码');
            $table->string('address')->default('')->comment('地址');
            $table->string('ip')->default('')->comment('ip地址');
            $table->softDeletes();
            $table->timestamps();
            $table->comment = 'laravel测试表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laravels');
    }
}
