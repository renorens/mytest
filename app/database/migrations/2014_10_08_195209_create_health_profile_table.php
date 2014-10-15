<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHealthProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('health_profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('patient_id');
			$table->boolean('diabetic');
			$table->string('diabetic_type');
			$table->string('diabetic_description');
			$table->boolean('smoker');
			$table->boolean('hookah');
			$table->boolean('blood_pressure');
			$table->boolean('pregnant');
			$table->date('pregnancy_due_date');
			$table->string('pregnancy_gender');
			$table->string('pregnant_details');
			$table->boolean('vascular');
			$table->string('vascular_description');
			$table->boolean('cancer');
			$table->string('cancer_description');
			$table->boolean('recent_fractures');
			$table->string('fractures_description');
			$table->boolean('heart_disease');
			$table->string('heart_disease_description');
			$table->boolean('kidney_disease');
			$table->string('kidney_disease_description');
			$table->boolean('infections');
			$table->string('infections_description');
			$table->boolean('surgeries');
			$table->string('surgeries_description');
			$table->boolean('family_history');
			$table->string('family_history_description');
			$table->string('work_field');
			
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
		Schema::drop('health_profile');
	}

}
