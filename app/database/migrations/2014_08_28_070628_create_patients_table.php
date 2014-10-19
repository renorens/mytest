<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('clinic_id');
			$table->string('name');
			$table->string('gender');
			$table->date('dob');
			$table->string('email');
			$table->string('mobile');
			$table->string('phone');
			$table->string('address');
			$table->string('city');
			$table->string('country');
			$table->date('patient_since');
			$table->string('emergency_contact_name');
			$table->string('emergency_contact_phone');
			$table->string('emergency_contact_relationship');

			$table->foreign('clinic_id')
                  ->references('id')
                  ->on('clinics')
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
		Schema::drop('patients');
	}

}
