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
        //crear los eventos recogidos en una tabla en la bbdd
        $events= Event::factory(4)->create(); 
        $this->assertCount(4, $events); 
        //buscar la tabla con eventos en la bbdd
        $events= Event::all();
        
        //comprobar  routar controller
        
        //comprobar la ruta 


        $response = $this->get(route('comingEvents'))
            ->assertStatus(200)
            ->assertViewIs('comingEvents')
            ->assertViewHas('events', $events)
            ->assertSee($events[0] -> name);



        // $response = $this->get(route('welcome'))
        //     ->assertStatus(200); 

            //comprobar que la vista es la correcta
            // ->assertViewIs('comingEvents'); 
        
        // //comprobar vista tenga todos los eventos
        // ->assertViewHas('comingEvents, $events');
        // //todos los eventos se deben mostrar

        

    }
}
