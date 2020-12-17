<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event; 

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        \App\Models\User::factory(1)->create(
            [   
                'name'=> 'eee',
                'isAdmin'=>true
            ]
        );
        
        \App\Models\User::factory(10)->create();

        \App\Models\Event::factory(4)->create();
    }
}
