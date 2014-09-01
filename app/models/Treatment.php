<?php

class Treatment extends \Eloquent {
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