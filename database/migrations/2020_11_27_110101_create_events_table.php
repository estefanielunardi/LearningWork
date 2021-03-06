<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->time('time');
            $table->bigInteger('limit');
            $table->text('description');
            $table->text('requirements');
            $table->timestamps();
            $table->boolean('highlight')->default(false); 
            $table->string('category');
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
