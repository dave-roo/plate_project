<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablearea', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('status');
			$table->integer('orderid');
			$table->integer('itemid');
			$table->integer('tableno');
            $table->integer('seatno');
            $table->integer('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tablearea');
    }
}
