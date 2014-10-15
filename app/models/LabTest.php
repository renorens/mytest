<?php namespace App\Models;
use \LaravelBook\Ardent\Ardent;
class LabTest extends Ardent {
	protected $fillable = [];

	public function treatment()
	{
		return $this->belongsTo('App\Models\Treatment');
	}
}