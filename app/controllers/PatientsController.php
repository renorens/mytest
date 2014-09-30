<?php

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
			$patients = Patient::where('clinic_id', '=', $clinic_id)->get();
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
		// Session::put('patient', $patient);
		
		$patient = $clinic->patients()->save($patient);
		// dd($patient->name);
		return View::make('Patients.editPatient', array('patient'=>$patient));
		// return View::make('Patients.addressForm');

		// check if session has patient info / coming from previous button
		// if(Session::has('patient')) {
		// 	$patient = Session::get('patient');
		// 	return View::make('Patients.create', array('patient' => $patient));
		// }else {
			

		// }
		// $form = Input::get('formName'); 
		// if($form == 'baseForm') {
		// 	$patient = new Patient;
		// 	if(Input::has('gender')) {
		// 		$patient->gender = 'Male';
		// 	}else {
		// 		$patient->gender = 'Female';
		// 	}
		// 	$inputs = Input::all();
		// 	$patient->name = $inputs['name'];
		// 	$patient->dob = $inputs['dob'];

		// 	$clinic = Session::get('clinic');
		// 	$clinic->patients()->save($patient);

		// 	return View::make('Patients.addressForm');
		// }
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
		//
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
		//
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
		return $this->index();
	}

}