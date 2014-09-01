<?php

class MedicalInfo extends \Eloquent {
	protected $fillable = [];

	public function patient()
	{
		return $this->belongsTo('Patient');
	}
}