<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event; 

class CreateEventTest extends TestCase
{
    use RefreshDatabase; 
    public function test_auth_users_can_see_create_events_view()
    {
        
        $response = $this->get(route('createEvents'));
        
        // $this->withoutExceptionHandling(); 
        
        $response->assertStatus(200)
        ->assertViewIs('createEvents')
        ->assertSee(""); 
        
        $response = $this->post(route('store'));
    }
}
