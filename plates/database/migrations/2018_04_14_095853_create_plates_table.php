<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreatePlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::dropIfExists('plates');
		
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
		
		$dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
		
		for ($x = 0; $x <= 1000; $x++) {
			$arrdepday = rand (1,12);
			
			DB::table('plates')->insert([
				'tableno' => rand (1,2),
				'seatno' => rand (1,4),
				'orderid' => rand (300,400),
				'itemid' => rand (300,400),
				'plateid' => rand (300,400),
				'ingoingtime' => Carbon::create(2018, $arrdepday, $arrdepday, 0, 0, 0),
				'outgoingtime' => Carbon::create(2018, $arrdepday, $arrdepday, 0, 0, 0),
				'arrivaltime' => Carbon::create(2018, $arrdepday, $arrdepday, 0, 0, 0),
				'inarrivalduration' => rand (1,20),
				'created_at' => Carbon::create(2018, $arrdepday, $arrdepday, 0, 0, 0),
			]);
		}
		
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
