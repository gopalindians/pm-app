<?php

namespace Tests\Unit;

use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TodoTest extends TestCase {
	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function testTodoListIndexPage() {


		$response = $this->get('project/1/xyz/todolists');
		$response->assertStatus(302);
	}
}
