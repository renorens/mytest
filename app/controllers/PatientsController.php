<?php
use \app\models\PersonalInfo;
class PatientsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /patients
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		$patient = new Patient;
		$clinic = Session::get('clinic');

		$clinic->patients()->save($patient);
		$personalInfo = Input::only('firstName','lastName','dob','email','gender','mobile',
									'phone','address','country','city','address','emergencyName',
									'emergencyPhone','emergencyRelationship');

		$this->createPersonalInfo($personalInfo, $patient);
	}

	public function createPersonalInfo($inputs, $patient)
	{
		$personalInfo = new PersonalInfo;

		$personalInfo->first_name = $inputs['firstName'];
		$personalInfo->last_name = $inputs['lastName'];
		$personalInfo->dob = $inputs['dob'];
		$personalInfo->email = $inputs['email'];
		$personalInfo->mobile = $inputs['gender'];
		$personalInfo->gender = $inputs['mobile'];
		$personalInfo->phone = $inputs['phone'];
		$personalInfo->address = $inputs['address'];
		$personalInfo->country = $inputs['country'];
		$personalInfo->city = $inputs['city'];
		$personalInfo->address = $inputs['address'];
		$personalInfo->emergency_contact_name = $inputs['emergencyName'];
		$personalInfo->emergency_contact_phone = $inputs['emergencyPhone'];
		$personalInfo->emergenct_contact_relationship = $inputs['emergencyRelationship'];

		$patient->personal_info()->save($personalInfo);
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
		//
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