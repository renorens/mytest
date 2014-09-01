<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates the clinics table
        Schema::create('clinics', function ($table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->string('category');
			$table->string('city');
			$table->string('address');
			$table->string('phone');

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
		schema::drop('clinics');
	}

}
