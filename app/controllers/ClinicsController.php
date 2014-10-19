<?php

use \App\Models\Clinic;

class ClinicsController extends \BaseController {

	/**
	 * Display a listing of clinics
	 *
	 * @return Response
	 */
	public function index()
	{
		$clinics = Clinic::all();

		return View::make('Clinics.index', compact('clinics'));
	}

	public function showMyClinic()
	{
		$user = Confide::user();
		$clinic = Clinic::find($user->clinic_id)->with('appointments')->first();
		$appointments = $clinic->appointments()->get();
		return View::make('Clinics.myClinic', array('user'=>$user, 'appointments'=>$appointments, 'clinic'=>$clinic));
	}

	/**
	 * Show the form for creating a new clinic
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Clinics.create');
	}

	/**
	 * Store a newly created clinic in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$validator = Validator::make($data = Input::all(), Clinic::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Clinic::create($data);

		return Redirect::to('clinics/index');
	}

	/**
	 * Display the specified clinic.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$clinic = Clinic::findOrFail($id);

		return View::make('clinics.show', compact('clinic'));
	}

	/**
	 * Show the form for editing the specified clinic.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$clinic = Clinic::find($id);

		return View::make('clinics.edit', compact('clinic'));
	}

	/**
	 * Update the specified clinic in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$clinic = Clinic::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Clinic::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$clinic->update($data);

		return Redirect::route('clinics.index');
	}

	/**
	 * Remove the specified clinic from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Clinic::destroy($id);

		return Redirect::route('clinics.index');
	}

}
