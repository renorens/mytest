<?php

class Patient extends \Eloquent {
	protected $fillable = ['first_name', 'last_name', 'dob', 'email', 'mobile', 'phone', 'gender',
						   'emergency_contact_name', 'address','city','country','emergency_contact_phone',
						   'emergenct_contact_relationship'];

	public  function clinic()
	{
		return $this->belongsTo('Clinic');
	}

	public function personal_info()
	{
		return $this->hasOne('personal_info');
	}

	public function medical_info()
	{
		return $this->hasOne('MedicalInfo');
	}
}