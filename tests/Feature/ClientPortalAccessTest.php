<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientPortalAccessTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAccessToPortalRequiresUrlParameter()
    {
        //$response = $this->get('/portal');

        //$response->assertStatus(404);

        // Use the ?dev URL parameter
        $res = $this->get('/portal?dev');

        $res->assertStatus(302);

        $res->assertRedirect('/login');

        //$res->assertStatus(200);

        //$res->assertSee('This is the client portal index page.');
    }
}
