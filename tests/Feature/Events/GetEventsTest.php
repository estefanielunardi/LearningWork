<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event; 
use App\Models\User; 

class GetEventsTest extends TestCase
{
    
    use RefreshDatabase; 

    public function test_can_retrive_all_events()
    {
        $this->withoutExceptionHandling(); 

        $events = Event::factory(5)->create();

        $this->assertCount(5, $events); 

        $events= Event::all();

        $response = $this->get(route('welcome'))
            ->assertStatus(200)
            ->assertViewIs('welcome')
            ->assertViewHas('event', $events)
            ->assertSee($events[0] -> name);
            
    }
}
