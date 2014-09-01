<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_infos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('patient_id');
			$table->string('first_name');
			$table->string('last_name');
			$table->date('dob');
			$table->string('email');
			$table->string('mobile');
			$table->string('phone');
			$table->string('emergency_contact_name');
			$table->string('emergency_contact_phone1');
			$table->string('emergency_contact_phone2');
			$table->string('emergenct_contact_relationship');

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
		Schema::drop('personal_infos');
	}

}
