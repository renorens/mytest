<?php namespace App\Models;
use \LaravelBook\Ardent\Ardent;
class Medication extends use \LaravelBook\Ardent\Ardent; {
	protected $fillable = [];

	public function perscription()
	{
		return $this->belongsTo('App\Models\Perscription');
	}
}