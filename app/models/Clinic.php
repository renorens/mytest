<?php namespace App\Models;

use \LaravelBook\Ardent\Ardent;

class Clinic extends Ardent {

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
    	return $this->hasMany('App\Models\Appointment');
    }

    public function patients()
    {
    	return $this->hasMany('App\Models\Patient');
    }

}