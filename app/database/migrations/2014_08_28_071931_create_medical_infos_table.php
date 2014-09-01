<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medical_infos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('patient_id');
			$table->boolean('diabetic');
			$table->boolean('heart_disease');
			$table->boolean('blood_pressure');

			$table->foreign('patient_id')
                  ->references('id')
                  ->on('patients')
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
		Schema::drop('medical_infos');
	}

}
