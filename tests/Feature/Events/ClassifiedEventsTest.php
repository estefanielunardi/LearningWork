<?php

namespace Tests\Feature\Events;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event; 

class ClassifiedEventsTest extends TestCase
{
    use RefreshDatabase; 
      public function test_highlighted_events_are_shown_in_welcome_view()
    {
        $events= Event::factory(4)->create([
            'type' => 'highlight'
        ]); 

        $this->assertCount(4, $events);
        // dd($events); 

        $response = $this->get(route('welcome')); 

        $response->assertStatus(200);
    }
}
