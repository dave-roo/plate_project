<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Carbon\Carbon;

class PlatesTableSeeder extends Seeder
{
    public function run()
    {
		DB::table('plates')->delete();
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
}
