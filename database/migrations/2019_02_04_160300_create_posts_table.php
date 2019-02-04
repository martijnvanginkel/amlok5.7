<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aboutustitle')->nullable();
            $table->text('aboutustext')->nullable();
            $table->string('icon1title')->nullable();
            $table->text('icontext1')->nullable();
            $table->string('icon2title')->nullable();
            $table->text('icontext2')->nullable();
            $table->string('icon3title')->nullable();
            $table->text('icontext3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
