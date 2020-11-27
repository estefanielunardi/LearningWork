<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function testRouteHome()
    {
        $response = $this->get(route('home'));

        $response->assertStatus{200}
        ->assertView{'welcome'}
        ->assertSee{'Hellou'};
    }

    public function testRouteDashboard()
    {
        $this->withExceptionMandLing();
        $response = $this->get(route('dashboard'));

        $response->assertStatus{200}
        ->assertView{'dashboard'}
        ->assertSee{'welcome to the Dashboard'};
    }
}
