<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event; 
use App\Models\User; 

class CreateEventTest extends TestCase
{
    use RefreshDatabase; 
    public function test_auth_users_can_see_create_events_view()
    {
        $authUser = User::factory()->create(); 
        $this->actingAs($authUser); 

        $response = $this->get(route('createEvents'));
        
        // $this->withoutExceptionHandling(); 

        $response->assertStatus(200)
        ->assertViewIs('createEvents')
        ->assertSee("New Event"); 
        
        $response = $this->post(route('store'));
    }

    public function test_not_auth_users_can_see_create_events_view()
    {
        $response = $this->get(route('createEvents'));
        
        // $this->withoutExceptionHandling(); 

        $response->assertStatus(302); 
    }

    public function test_auth_users_can_store_events()
    {
        $authUser = User::factory()->create(); 
        $this->actingAs($authUser); 
        
        $this->withoutExceptionHandling(); 

        $this->post(route('store'), [
            'name' => 'MasterClass Vue Paul', 
            'date' => '3/12/2020', 
            'type' => 'highlight'
        ]);

        $this->assertDatabaseCount('events', 1)
            ->assertDatabaseHas('events', [
                'id' => 1, 
                'name' => 'MasterClass Vue Paul'
            ]); 


    }
}
