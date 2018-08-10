<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Carbon\Carbon;

class CustomeractivityTableSeeder extends Seeder
{

    public function run()
    {
		//DB::table('customeractivity')->delete();
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
}
