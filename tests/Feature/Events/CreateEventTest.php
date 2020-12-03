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
        
        $response = $this->get(route('create'));
        
        // $this->withoutExceptionHandling(); 
        
        $response->assertStatus(200)
        ->assertViewIs('eventsCreate')
        ->assertSee("Crear evento"); 
        
        $response = $this->post(route('store'));
    }
}
