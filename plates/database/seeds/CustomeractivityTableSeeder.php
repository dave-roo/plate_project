<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Carbon\Carbon;

class CustomeractivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('customeractivity')->delete();
		$dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
		$dayNumber = $dt->dayOfWeekIso;
		$arrdepday = rand (1,12);

		for ($x = 0; $x <= 10; $x++) {
			DB::table('customeractivity')->insert([
				'guests' => rand (1,10),
				'table' => rand (1,10),
				'duration' => rand (1,10),
				'arrival' => Carbon::create(2018, $arrdepday, $arrdepday, 0, 0, 0),
				'departure' => Carbon::create(2018, $arrdepday, $arrdepday, 0, 0, 0),
				'created_at' => $dateNow,
				'updated_at' => $dateNow,
				'dayoftheweek' => rand (1,7),
			]);
		}
	}
}
