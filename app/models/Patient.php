<?php

class Patient extends \Eloquent {
	protected $fillable = [];

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