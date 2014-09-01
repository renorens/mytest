<?php

class PersonalInfo extends \Eloquent {
	protected $fillable = ['first_name', 'last_name', 'dob', 'email', 'mobile', 'phone', 'emergency_contact_name'
						  'emergency_contact_phone1', 'emergency_contact_phone2', 'emergenct_contact_relationship'];

	public function patient()
	{
		return $this->belongsTo('Patient');
	}
}