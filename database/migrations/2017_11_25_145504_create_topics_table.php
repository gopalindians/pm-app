<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'topics', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->integer( 'project_id' )->describe( 'primary key of project id' );
			$table->integer( 'creater_id' )->describe( 'primary key of topic creators id (usually user id)' );
			$table->text( 'topic_name' )->describe( 'name of the topic' );
			$table->longText( 'topic_body' )->describe( 'body of the topic' );
			$table->timestampsTz();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'topics' );
	}
}
