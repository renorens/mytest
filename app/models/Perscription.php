<?php

class Perscription extends \Eloquent {
	protected $fillable = [];

	public function treatment()
	{
		return $this->belongsTo('Treatment');
	}

	public function medication()
	{
		return $this->hasOne('Medication');
	}
}