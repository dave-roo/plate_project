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
			$table->integer('orderid'); // maybe should be changed to increments
            $table->string('category');
            $table->string('title');
            $table->mediumText('comments');
            $table->integer('quantity');
            $table->float('price');
            $table->integer('table');
            $table->integer('seat');
<<<<<<< HEAD:plates/database/migrations/2018_08_21_110432_create_orders_table.php
            $table->timestamps();
=======
			$table->date('updated_at');
			$table->date('created_at');
			
>>>>>>> 8689d8a22778f38976dfbe639e4e935728bde2d1:plates/database/migrations/2018_08_21_110435_create_orders_table.php
        });
    }
}
