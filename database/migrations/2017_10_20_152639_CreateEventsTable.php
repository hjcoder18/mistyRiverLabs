<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('events', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('name');
    		$table->time('start_time');
    		$table->time('end_time');
    		$table->string('street');
    		$table->string('city');
    		$table->string('state');
    		$table->string('details');
    		$table->dateTimeTz('date');
    		$table->timestamps();
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('events');
    }
}
