<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plates', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('tableno');
			$table->integer('seatno');
			$table->integer('orderid');
			$table->integer('itemid');
            $table->string('plateid'); //RFID code
           	$table->dateTime('ingoingtime'); //in-going time
           	$table->dateTime('outgoingtime'); //out-going time
           	$table->dateTime('arrivaltime'); //arrival time
           	$table->float('inarrivalduration'); //in-going to arrival duration	
           	$table->dateTime('created_at');			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plates');
    }
}
