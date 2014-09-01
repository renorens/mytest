<?php

class Medication extends \Eloquent {
	protected $fillable = [];

	public function perscription()
	{
		return $this->belongsTo('Perscription');
	}
}