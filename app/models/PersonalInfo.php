<?php

class PersonalInfo extends \Eloquent {
	protected $fillable = ['first_name', 'last_name', 'dob', 'email', 'mobile', 'phone', 'gender',
						   'emergency_contact_name', 'address','city','country','emergency_contact_phone',
						   'emergenct_contact_relationship'];

	public function patient()
	{
		return $this->belongsTo('Patient');
	}
}