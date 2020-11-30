<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateEventTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_an_event_can_be_created()
    {
        //comprobar ruta formulario evento
        $response = $this->get(route('events'));
        //la vista muestra el formulario del evento
        $response->assertViewIs('events');
        //el evento se guarda en la db

        //buscar ultimo evento en db
        //comprobar la ruta
        //mostrar la vista correcta 
        //que la vista tenga el evento creado
        //comprobar que se muestre 
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
