<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
	    Schema::create('order_lines', function (Blueprint $table) {
           	$table->increments('id');
			$table->integer('order_id')->unsigned();
			$table->string('line_id');
			$table->string('sku', 10);
			$table->integer('qty');
			$table->timestamps();
        });
		
		Schema::table('order_lines', function($table) {
			$table->foreign('order_id')->references('id')->on('orders');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
