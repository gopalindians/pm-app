<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoListsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_lists_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer( 'project_id' )->describe( 'id project under which it is' );
            $table->integer( 'todo_list_id' )->describe( 'id of parent todo lists' );
            $table->integer( 'poster_id' )->describe( 'id of the creator of Todo' );
            $table->text( 'comment_text' )->describe( 'text of the comment' );
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
        Schema::dropIfExists('todo_lists_comments');
    }
}
