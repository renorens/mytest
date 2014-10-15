<?php namespace App\Models;
use \LaravelBook\Ardent\Ardent;
class HealthProfile extends Ardent {
	protected $fillable = ['diabetic','diabetic_type','diabetic_description','blood_pressure',
						'smoker','hookah','pregnant','pregnant_details','pregnancy_due_date',
						'pregnancy_gender','vascular','vascular_description',
						'cancer','cancer_description','recent_fractures','fractures_description','heart_disease',
						'heart_disease_description','kidney_disease','kidney_disease_description','infections','surgeries',
						'infections_description','family_history','family_history_description','work_field',
						'surgeries_description'];

	public  function patient()
	{
		return $this->belongsTo('App\Models\Patient');
	}
}