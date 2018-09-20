<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Faker\Generator as Faker;
use Carbon\Carbon;

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
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
			
        });
		
		$dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
		
		for ($x = 0; $x <= 100; $x++) {
			$arrdepday = rand (1,12);
			DB::table('customeractivity')->insert([
				'guests' => rand (1,10),
				'table' => rand (1,10),
				'duration' => rand (1,10),
				'arrival' => Carbon::create(2018, $arrdepday, $arrdepday, 0, 0, 0),
				'departure' => Carbon::create(2018, $arrdepday, $arrdepday, 0, 0, 0),
				'created_at' => Carbon::create(2018, $arrdepday, $arrdepday, 0, 0, 0),
				'updated_at' => $dateNow,
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
        Schema::dropIfExists('customeractivity');
    }
}
