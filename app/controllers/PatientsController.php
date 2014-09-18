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
		$inputs = Input::all();
		dd($inputs);
		$patient = new Patient;
		$clinic = Session::get('clinic');

		$patient->first_name = $inputs['firstName'];
		$patient->last_name = $inputs['lastName'];
		$patient->dob = $inputs['dob'];
		// $patient->email = $inputs['email'];
		$patient->mobile = $inputs['gender'];
		// $patient->gender = $inputs['mobile'];
		// $patient->phone = $inputs['phone'];
		// $patient->address = $inputs['address'];
		// $patient->country = $inputs['country'];
		// $patient->city = $inputs['city'];
		// $patient->address = $inputs['address'];
		// $patient->emergency_contact_name = $inputs['emergencyName'];
		// $patient->emergency_contact_phone = $inputs['emergencyPhone'];
		// $patient->emergenct_contact_relationship = $inputs['emergencyRelationship'];

		$clinic->patients()->save($patient);
		return 'myClinic';
		// return Redirect::to('myClinic');
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
		//
	}

}