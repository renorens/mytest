<?php namespace App\Models;

class HealthProfile extends \Eloquent {
	protected $fillable = ['diabetic','diabetic_type','diabetic_description','blood_pressure',
						'smoker','hookah','blood_pressure','pregnant','pregnant_details','pregnancy_due_date',
						'pregnancy_gender','vascular','vascular_description',
						'cancer','cancer_description','recent_fractures','fractures_description','heart_disease',
						'heart_disease_description','kidney_disease','kidney_disease_description','infections',
						'infections_description','family_history','family_history_description','work_field'];

	public  function patient()
	{
		return $this->belongsTo('Patient');
	}
}