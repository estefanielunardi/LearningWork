<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;

class SubscribeToEventTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_subscribe_to_an_event()
    {
        $this->withoutExceptionHandling();

        Event::factory(1)->create();
        $event = Event::find(1);
        $id = $event->id;

        $response = $this->get('subscribe/' . $id);
        $response->assertStatus(302);
    }

}
