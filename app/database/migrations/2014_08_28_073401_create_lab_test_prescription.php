<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabTestPrescription extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lab_test_prescription', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('lab_test_id');
			$table->unsignedInteger('prescription_id');

			$table->foreign('lab_test_id')
                  ->references('id')
                  ->on('lab_tests')
                  ->onDelete('cascade');

            $table->foreign('prescription_id')
                  ->references('id')
                  ->on('prescriptions')
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
		Schema::drop('lab_test_prescription');
	}

}
