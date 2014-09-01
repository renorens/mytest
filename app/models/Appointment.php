<?php

class Appointment extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['date', 'description', 'type'];

	public function clinic()
	{
		return $this->belongsTo('Clinic');
	}

	public function patient()
	{
		return $this->belongsTo('Patient');
	}

	public function treatment()
	{
		return $this->hasOne('Treatment');
	}

}