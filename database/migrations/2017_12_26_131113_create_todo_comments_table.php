<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('todo_id')->describe('id of todo');
            $table->integer('poster_id')->describe('id of the user who posted the comment');;
            $table->integer('todo_list_id')->describe('id of todo list');;
            $table->integer('project_id')->describe('id of  project');;
            $table->text('comment_text')->describe('text of the comment');;
            $table->timestampsTz();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo_comments');
    }
}
