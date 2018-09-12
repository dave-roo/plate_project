<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

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
			$table->string('title');
			$table->string('description');
			$table->float('price');
			$table->string('category');
           	$table->dateTime('created_at');
           	$table->dateTime('updated_at');
        });
		
		DB::table('menus')->insert(
			array(
				'title' => 'Parma',
				'description' => 'Chicken with ham and cheese',
				'price'=>rand(1,50),
				'category'=>'Main',
				'created_at'=>'2018-09-' . rand(1,30) . ' 20:34:05',
				'updated_at'=>'2018-09-' . rand(1,30) . ' 20:34:05'
				
			)
		);
		
		DB::table('menus')->insert(
			array(
				'title' => 'Burger',
				'description' => 'Blue cheese and fries',
				'price'=>rand(1,50),
				'category'=>'Main',
				'created_at'=>'2018-09-' . rand(1,30) . ' 20:34:05',
				'updated_at'=>'2018-09-' . rand(1,30) . ' 20:34:05'
				
			)
		);
		
		DB::table('menus')->insert(
			array(
				'title' => 'Pasta',
				'description' => 'with Meatball',
				'price'=>rand(1,50),
				'category'=>'Main',
				'created_at'=>'2018-09-' . rand(1,30) . ' 20:34:05',
				'updated_at'=>'2018-09-' . rand(1,30) . ' 20:34:05'
				
			)
		);
		
		DB::table('menus')->insert(
			array(
				'title' => 'Steak',
				'description' => 'Meaty Goodness',
				'price'=>rand(1,50),
				'category'=>'Main',
				'created_at'=>'2018-09-' . rand(1,30) . ' 20:34:05',
				'updated_at'=>'2018-09-' . rand(1,30) . ' 20:34:05'
				
			)
		);
		
		DB::table('menus')->insert(
			array(
				'title' => 'Soup',
				'description' => 'Hot Soup',
				'price'=>rand(1,50),
				'category'=>'Entree',
				'created_at'=>'2018-09-' . rand(1,30) . ' 20:34:05',
				'updated_at'=>'2018-09-' . rand(1,30) . ' 20:34:05'
			)
		);
		
		DB::table('menus')->insert(
			array(
				'title' => 'Salad',
				'description' => 'Green',
				'price'=>rand(1,50),
				'category'=>'Entree',
				'created_at'=>'2018-09-' . rand(1,30) . ' 20:34:05',
				'updated_at'=>'2018-09-' . rand(1,30) . ' 20:34:05'
			)
		);
		
		DB::table('menus')->insert(
			array(
				'title' => 'Cake',
				'description' => 'Cheese Cake with berries',
				'price'=>rand(1,50),
				'category'=>'Dessert',
				'created_at'=>'2018-09-' . rand(1,30) . ' 20:34:05',
				'updated_at'=>'2018-09-' . rand(1,30) . ' 20:34:05'
			)
		);
		
		DB::table('menus')->insert(
			array(
				'title' => 'Icecream',
				'description' => 'Chocolate',
				'price'=>rand(1,50),
				'category'=>'Dessert',
				'created_at'=>'2018-09-' . rand(1,30) . ' 20:34:05',
				'updated_at'=>'2018-09-' . rand(1,30) . ' 20:34:05'
			)
		);
		
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
