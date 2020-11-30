<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event; 

class GetEventsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase; 
    public function test_can_retrive_all_events()
    {
        //tenemos que tener creados los eventos recogidos en una tabla en la bbdd
        $events= Event::factory(4)->create(); 
        $this->assertCount(4, $events); 
        //tenemos que buscar la tabla con eventos en la bbdd
        $events= Event::all();
        //tenemos que comprobar la ruta 
        $response = $this->get(route('comingEvents'));
        //tenemos que comprobar que la vista es la correcta
        $response->assertViewIs('comingEvents'); 
        
        //tenemos que ver que la vista tenga todos los eventos
        $response->assertViewHas('comingEvents, $events');
        //todos los eventos se deben mostrar

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
