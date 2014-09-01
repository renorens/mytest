<?php

class LabTest extends \Eloquent {
	protected $fillable = [];

	public function treatment()
	{
		return $this->belongsTo('Treatment');
	}
}