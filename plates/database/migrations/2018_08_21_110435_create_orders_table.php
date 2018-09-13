<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::dropIfExists('orders');
		
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('orderid');
            $table->string('name');
            $table->string('category');
            $table->string('title');
            $table->string('description');
            $table->mediumText('comments');
            $table->integer('quantity');
            $table->float('price');
            $table->integer('table');
            $table->integer('seat');
            $table->timestamps();
        });
		
		DB::table('orders')->insert(
			array(
				'orderid' => 1,
				'name'=>'Parma',
				'category'=>'Main',
				'title'=>'Chicken with ham and cheese',
				'description' => 'Chicken with ham and cheese',
				'comments'=>'-',
				'quantity'=>rand(1,10),
				'price'=>rand(1,50),				
				'table'=>rand(1,2),
				'seat'=>rand(1,2)
			)
		);
		
		DB::table('orders')->insert(
			array(
				'orderid' => 2,
				'name'=> 'Cake',
				'category'=> 'Entree',
				'title'=> 'Cheese Cake with berries',
				'description' => 'Cheese Cake with berries',
				'comments'=>'-',
				'quantity'=>rand(1,10),
				'price'=>rand(1,50),				
				'table'=>rand(1,2),
				'seat'=>rand(1,2)
			)
		);
    }
}
