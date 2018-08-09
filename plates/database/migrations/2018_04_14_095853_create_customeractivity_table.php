<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomeractivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customeractivity', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guests');
            $table->integer('table');
			$table->integer('duration');
			$table->dateTime('arrival');
			$table->dateTime('departure');
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
        Schema::dropIfExists('customeractivity');
    }
}
