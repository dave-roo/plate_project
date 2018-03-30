<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRideoffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('owner'); //user id
			//$table->foreign('owner')->references('id')->on('users');
			
            $table->string('cardesc');
            $table->string('startlocation');
            $table->string('endlocation');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('starttime');
            $table->string('endtime');
            $table->string('offerprice');
            $table->integer('avaliableseats');
            $table->string('details');
            $table->string('passengers'); // comma separated list and user ids
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
        Schema::dropIfExists('offers');
    }
}
