<?php

use \App\Models\HealthProfile;
use \App\Models\Clinic;
use \App\Models\Patient;

class PatientsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /patients
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Session::has('clinic')) {
			$clinic_id = Session::get('clinic')->id;
			$patients = Patient::where('clinic_id', '=', $clinic_id)->paginate(13);
			return View::make('Patients.index', array('patients' => $patients));
		}else {
			return Redirect::to('login');
		}
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /patients/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Patients.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /patients
	 *
	 * @return Response
	 */
	public function store()
	{
		// store patient
		$patient = new Patient;
		if(Input::has('gender')) {
			$patient->gender = 'Male';
		}else {
			$patient->gender = 'Female';
		}
		$inputs = Input::all();
		$patient->name = $inputs['name'];
		$patient->dob = $inputs['dob'];

		$clinic = Session::get('clinic');

		$patient = $clinic->patients()->save($patient);

		return Redirect::action('PatientsController@edit', array('id'=> $patient->id));
	}

	/**
	 * Display the specified resource.
	 * GET /patients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Patient::whereId($id)->get();
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /patients/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$patient = Patient::find($id);
		$patient->age = Static::calculateAge($patient->dob);
		return View::make('Patients.editPatient', array('patient'=>$patient));
	}

	public static function calculateAge($dob)
	{
		return date_diff(date_create($dob), date_create('today'))->y;
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /patients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$form = Input::get('form_name');
		$patient = Patient::find($id);
		if($form == 'addressForm') {
			if(Input::has('address')) {
				$patient->address = Input::get('address');
			}
			if(Input::has('city')) {
				$patient->city = Input::get('city');
			}
			if(Input::has('country')) {
				$patient->country = Input::get('country');
			}
			if(Input::has('phone')) {
				$patient->phone = Input::get('phone');
			}
			if(Input::has('mobile')) {
				$patient->mobile = Input::get('mobile');
			}
			if(Input::has('email')) {
				$patient->email = Input::get('email');
			}
		}

		if($form == 'emergencyForm') {
			if(Input::has('emergencyName')) {
				$patient->emergency_contact_name = Input::get('emergencyName');
			}
			if(Input::has('emergencyPhone')) {
				$patient->emergency_contact_phone = Input::get('emergencyPhone');
			}
			if(Input::has('emergencyRelationship')) {
				$patient->emergency_contact_relationship = Input::get('emergencyRelationship');
			}
		}

		if ( $form == 'healthProfileForm' ) {
			$inputs = Input::all();
			$profile = new HealthProfile;

			if ( Input::has('diabetic') ) {
				$profile->diabetic = Input::get('diabetic');
			}
			if ( Input::has('bloodPressure') ) {
				$profile->blood_pressure = Input::get('bloodPressure');
			}
			if ( Input::has('smoker') ) {
				$profile->smoker = Input::get('smoker');
			}
			if ( Input::has('hookah') ) {
				$profile->hookah = Input::get('hookah');
			}
			if ( Input::has('pregnant') ) {
				$profile->pregnant = Input::get('pregnant');
			}
			if ( Input::has('vascular') ) {
				$profile->vascular = Input::get('vascular');
			}
			if ( Input::has('cancer') ) {
				$profile->cancer = Input::get('cancer');
			}
			if ( Input::has('recentFractures') ) {
				$profile->recent_fractures = Input::get('recentFractures');
			}
			if ( Input::has('heartDisease') ) {
				$profile->heart_disease = Input::get('heartDisease');
			}
			if ( Input::has('kidneyDisease') ) {
				$profile->kidney_disease = Input::get('kidneyDisease');
			}
			if ( Input::has('infections') ) {
				$profile->heart_disease = Input::get('infections');
			}
			if ( Input::has('surgeries') ) {
				$profile->surgeries = Input::get('surgeries');
			}
			if ( Input::has('familyHistroy') ) {
				$profile->family_history = Input::get('familyHistroy');
			}
			if ( Input::has('workField') ) {
				$profile->work_field = Input::get('workField');
			}
		}

		$patient->save();
		$patient->healthProfile()->save($profile);
		$patient->age = Static::calculateAge($patient->dob);
		return View::make('Patients.editPatient', array('patient'=>$patient));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /patients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$patient = Patient::find($id);
		$patient->delete();
		return Redirect::to('patients/index');
		// return $this->index();
	}

}