<?php

class Patient extends \Eloquent {
	private $age = '';
	protected $fillable = ['name', 'dob', 'email', 'mobile', 'phone', 'gender',
						   'emergency_contact_name', 'address','city','country','emergency_contact_phone',
						   'emergenct_contact_relationship'];

	public  function clinic()
	{
		return $this->belongsTo('Clinic');
	}

	public function healthProfile()
	{
		return $this->hasOne('HealthProfile');
	}
}