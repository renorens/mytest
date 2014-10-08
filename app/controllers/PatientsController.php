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
		// Session::put('patient', $patient);
		
		$patient = $clinic->patients()->save($patient);
		// dd($patient->id);

		return Redirect::action('PatientsController@edit', array('id'=> $patient->id));
		// return View::make('Patients.editPatient', array('patient'=>$patient));
		// return View::make('Patients.addressForm');
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
		$patient->save();
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