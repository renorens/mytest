<?php namespace App\Models;
use \LaravelBook\Ardent\Ardent;
class Patient extends Ardent {
	private $age = '';
	protected $fillable = ['name', 'dob', 'email', 'mobile', 'phone', 'gender',
						   'emergency_contact_name', 'address','city','country','emergency_contact_phone',
						   'emergenct_contact_relationship','patient_since'];

	public  function clinic()
	{
		return $this->belongsTo('App\Models\Clinic');
	}

	public function healthProfile()
	{
		return $this->hasOne('App\Models\HealthProfile');
	}
}