<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event; 
use App\Models\User; 

class EditEventTest extends TestCase
{
    use RefreshDatabase; 
    public function test_auth_users_can_see_edit_events_view()
    {
        // We need to create a user
        //We need to edit an event
        // We need to access an event to edit it
        
        $authUser = User::factory()->create(); 
        $this->actingAs($authUser); 
    
        $response = $this->get(route('createEvents'));
        $response->assertViewIs('createEvents');


        $response->assertStatus(200);
    
        
    }

    // public function test_auth_users_can_see_edit_events_view()
    // {
    //     // We need to create a user
    //     //We need to edit an event
    //     // We need to access an event to edit it
        
    //     $authUser = User::factory()->create(); 
    //     $this->actingAs($authUser); 
    
    //     $response = $this->get(route('createEvents'));
    //     $response->assertViewIs('createEvents');


    //     $response->assertStatus(200);
    
        
    // }
    public function test_auth_users_can_edit_events()
    {
       
        //We need to edit an event
        // We need to access an event to edit it
        
        
        $newEvent = $this->post('/events', [
            'name' => 'MasterClass Vue Paul', 
            'date' => '3/12/2020', 
            'time' => '12:30',
            'limit' => '30', 
            'description' => 'Introducción al framework de JavaScript Vue', 
            'requirements' => 'Conocimientos básicos de JavaScript',
            'category' => 'Standard',
        ]);
        $newEvent = Event::factory()->edit(); 
    
        $response = $this->patch(route('editEvents'));
        // $response->assertViewIs('createEvents');


        // $response->assertStatus(200);
    
        
    }
    //     ->assertSee("New Event"); 
        
    //     $response = $this->post(route('store'));
    // }

    // public function test_not_auth_users_can_see_create_events_view()
    // {
    //     $response = $this->get(route('createEvents'));
        

    //     $response->assertStatus(302); 
    // }

    // public function test_auth_users_can_store_events()
    // {
    //     $authUser = User::factory()->create(); 
    //     $this->actingAs($authUser); 
        
    //     $this->withoutExceptionHandling(); 

    //     $this->post(route('store'), [
    //         'name' => 'MasterClass Vue Paul', 
    //         'date' => '3/12/2020', 
    //         'time' => '12:30',
    //         'limit' => '30', 
    //         'description' => 'Introducción al framework de JavaScript Vue', 
    //         'requirements' => 'Conocimientos básicos de JavaScript',
    //     ]);

    //     $this->assertDatabaseCount('events', 1)
    //         ->assertDatabaseHas('events', [
    //             'id' => 1, 
    //             'name' => 'MasterClass Vue Paul'
    //         ]); 
    // }

    // public function test_not_auth_can_store_events()
    // {
    //     $response = $this->get(route('store'));
    

    //     $response->assertStatus(405); 
    // }
}
