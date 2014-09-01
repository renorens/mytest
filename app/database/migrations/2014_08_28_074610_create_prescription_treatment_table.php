<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionTreatmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prescription_treatment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('prescription_id');
			$table->unsignedInteger('treatment_id');

			$table->foreign('treatment_id')
                  ->references('id')
                  ->on('treatments')
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
		Schema::drop('prescription_treatment');
	}

}
