<?php

class Health_profile extends \Eloquent {
	protected $fillable = ['diabetic','diabetic_type','diabetic_description','blood_pressure',
						'smoker','hookah','blood_pressure','pregnant','pregnant_details','vascular','vascular_description',
						'cancer','cancer_description','recent_fractures','fractures_description','heart_disease',
						'heart_disease_description','kidney_disease','kidney_disease_description','infections',
						'infections_description','work_field'];

	public  function patient()
	{
		return $this->belongsTo('Patient');
	}
}