<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory(1)->create(
            [   
                'name'=> 'Cannoli',
                'isAdmin'=>true
            ]
        );
        
        \App\Models\User::factory(10)->create();

        Event::factory(4)->create();
    }
}
