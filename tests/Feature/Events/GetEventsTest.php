<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event; 

class GetEventsTest extends TestCase
{
    
    use RefreshDatabase; 

    public function test_can_retrive_all_events()
    {
        $events= Event::factory(4)->create(); 
        
        $this->assertCount(4, $events); 

        $events= Event::all();

        $response = $this->get(route('comingEvents'))
            ->assertStatus(200)
            ->assertViewIs('comingEvents')
            ->assertViewHas('events', $events)
            ->assertSee($events[0] -> name);
    }
}
