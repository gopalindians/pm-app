<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'todos', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->integer( 'project_id' )->describe( 'id project under which it is' );
			$table->integer( 'todo_list_id' )->describe( 'id of parent todo lists' );
			$table->integer( 'poster_id' )->describe( 'id of the creator of Todo' );
			$table->text( 'todo_name' )->describe( 'Name of todo' );
			$table->timestampsTz();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'todos' );
	}
}
