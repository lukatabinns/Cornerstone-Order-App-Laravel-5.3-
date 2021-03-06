<?php

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
        //
		Schema::create('orders', function (Blueprint $table) {
			$table->increments('id');
			$table->string('first_name', 30);
			$table->string('last_name', 30);
			$table->string('email')->unique();
			$table->smallInteger('address_line1');
			$table->string('city', 20);
			$table->string('post_code', 10);
			$table->timestamps();
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
