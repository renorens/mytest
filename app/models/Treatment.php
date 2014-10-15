<?php namespace App\Models;
use \LaravelBook\Ardent\Ardent;
class Treatment extends Ardent {
	protected $fillable = [];

	public function appointment()
	{
		return $this->belongsTo('Appointment');
	}

	public function perscriptions()
	{
		return $this->hasMany('Perscription');
	}

	public function labTests()
	{
		return $this->hasMany('labTests');
	}
}