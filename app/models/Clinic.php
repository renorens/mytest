<?php

class Clinic extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'description', 'category', 'city', 'address', 'phone'];

	public function users()
	{
		return $this->hasMany('User');
	}


	public function appointments()
    {
    	return $this->hasMany('Appointment');
    }

    public function patients()
    {
    	return $this->hasMany('Patient');
    }

}