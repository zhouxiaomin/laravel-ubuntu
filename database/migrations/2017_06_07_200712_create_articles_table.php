<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('user_id')->unsigned();//无符号
            $table->string('title');
            $table->text('content');
            $table->timestamp('published_at');
            $table->timestamps();
//            $table->foreign('user_id')->references('id')->on('users');//外键为users tab id. 只能用这个表里的id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
