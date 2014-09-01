<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicationPrescription extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medication_prescription', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('medication_id');
			$table->unsignedInteger('prescription_id');

			$table->foreign('medication_id')
                  ->references('id')
                  ->on('medications')
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
		Schema::drop('medication_prescription');
	}

}
