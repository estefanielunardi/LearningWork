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
        

        $response->assertStatus(200)
        ->assertViewIs('createEvents')
        ->assertSee("New Event"); 
        
        $response = $this->post(route('store'));
    }

    public function test_not_auth_users_can_see_create_events_view()
    {
        $response = $this->get(route('createEvents'));
        

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
            'time' => '12:30',
            'limit' => '30', 
            'description' => 'Introducción al framework de JavaScript Vue', 
            'requirements' => 'Conocimientos básicos de JavaScript',
            'category' => 'standard',
        ]);

        $this->assertDatabaseCount('events', 1)
            ->assertDatabaseHas('events', [
                'id' => 1, 
                'name' => 'MasterClass Vue Paul'
            ]); 

        $response = $this->post(route('comingEvents'));
        $response->assertViewIs('comingEvents');
    }

    public function test_not_auth_can_store_events()
    {
        $response = $this->get(route('store'));
    
        $response->assertStatus(405); 
    }
}
