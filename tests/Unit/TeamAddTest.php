<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeamAddTest extends TestCase
{
    /**
     * See team add page without login
     *
     * @return void
     */
    public function testSeeTeamAddWOLogin()
    {

        $response = $this->get('team/add');
        $response->assertStatus(302);
    }

    /**
     *  See "team add" page with login
     *
     */
    public function testSeeTeamAddWLogin()
    {

        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->get('team/add');
        $response->assertStatus(200);

    }
}
