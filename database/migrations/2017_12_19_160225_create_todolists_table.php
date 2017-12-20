<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodolistsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'todolists', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->integer( 'project_id' )->describe( 'Id of the project under which it is' );
			$table->integer( 'poster_id' )->describe( 'Id of who created the Todo Lists' );
			$table->text( 'todo_name' )->describe( 'Name of the todo lists' );
			$table->timestampsTz();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'todolists' );
	}
}
