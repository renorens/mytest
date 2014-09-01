<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabTestTreatmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lab_test_treatment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('lab_test_id');
			$table->unsignedInteger('treatment_id');

			$table->foreign('treatment_id')
                  ->references('id')
                  ->on('treatments')
                  ->onDelete('cascade');

            $table->foreign('lab_test_id')
                  ->references('id')
                  ->on('lab_tests')
                  ->onDelete('cascade');

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
		Schema::drop('lab_test_treatment');
	}

}
