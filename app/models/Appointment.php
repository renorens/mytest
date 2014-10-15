<?php namespace App\Models;

use \LaravelBook\Ardent\Ardent;

class Appointment extends Ardent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['date', 'description', 'type'];

	public function clinic()
	{
		return $this->belongsTo('App\Models\Clinic');
	}

	public function patient()
	{
		return $this->belongsTo('App\Models\Patient');
	}

	public function treatment()
	{
		return $this->hasOne('App\Models\Treatment');
	}

}