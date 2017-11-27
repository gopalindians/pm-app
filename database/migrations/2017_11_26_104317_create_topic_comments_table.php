<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicCommentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'topic_comments', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->integer( 'project_id' )->describe( 'primary key of project' );
			$table->integer( 'topic_id' )->describe( 'primary key of topic' );
			$table->integer( 'poster_id' )->describe( 'primary key of user who posted the comment' );
			$table->text( 'comment' )->describe( 'comment body' );
			$table->timestampsTz();
		} );
	}

	/**bc_app
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'topic_comments' );
	}
}
