<?php
/**
 * Created by PhpStorm.
 * User: leadingedge-new
 * Date: 12/18/2017
 * Time: 2:41 PM
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;


class DocumentTest extends TestCase
{

    public function testSeeDocumentsPage()
    {
        $response = $this->get('project/1/xyz/documents');
        $response->assertStatus(200);
    }

}
