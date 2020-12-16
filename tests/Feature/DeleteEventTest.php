<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Event;


class DeleteEventTest extends TestCase
{
    use RefreshDatabase;

    public function test_an_auth_user_can_delete_an_event()
    {
        $this->withoutExceptionHandling(); 
  
       $this->actingAs(User::factory()->create()); 

        $eventDelete = Event::factory()->create();
        
        $response = $this->get('/events/'. $eventDelete->id);

        $this->assertDatabaseCount('events', 0);

    }
}
