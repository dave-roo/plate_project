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
		Schema::dropIfExists('customeractivity');
		
        Schema::create('customeractivity', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guests');
            $table->integer('table');
			$table->integer('duration');
			$table->dateTime('arrival');
			$table->dateTime('departure');
        });
		
		for($i=0;$i<1000;$i++){
		DB::table('customeractivity')->insert(
			array(
				'guests' => rand(1, 10),
				'table' => rand(1, 2),
				'duration'=>rand(1,180),
				'arrival'=>'2018-09-' . rand(1,30) . ' 20:34:05',
				'departure'=>'2018-09-' . rand(1,30) . ' 20:34:05'
			)
		);
		}
		
		//Schema::dropIfExists('migrations');
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
