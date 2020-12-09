<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{

    protected $model = Event::class;


    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date' => $this->faker->date, 
            'time' => $this->faker->time, 
            'limit'=> $this->faker->randomNumber(), 
            'description'=> $this->faker->text, 
            'requirements'=> $this->faker->text,
            'category'=> $this->faker->text,
    
        ];
    }
}
