<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::dropIfExists('menus');
		
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('description');
			$table->integer('price');
            $table->timestamps();
        });
		
		//Schema::dropIfExists('migrations');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
