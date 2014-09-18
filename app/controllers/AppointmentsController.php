<?php

class AppointmentsController extends \BaseController {

	/**
	 * Display a listing of appointments
	 *
	 * @return Response
	 */
	public function index()
	{
		$clinic_id = Session::get('clinic')->id;
		$appointments = Appointment::where('clinic_id', $clinic_id)->get();
		$patientAppointments = [];
		foreach ($appointments as $appointment) {
			$patient = Patient::whereId($appointment->patient_id)->first();

			$patientAppointments[$appointment->id]['id'] = $appointment->id;
			$patientAppointments[$appointment->id]['patientName'] = $patient->first_name.' '.$patient->last_name;
			$patientAppointments[$appointment->id]['patientDob']  = $patient->dob;
			$patientAppointments[$appointment->id]['appointmentDate'] = $appointment->appointment_date;
		}
		return View::make('Appointments.index', array('appointments' => $patientAppointments));
	}


	/**
	 * Show the form for creating a new appointment
	 *
	 * @return Response
	 */
	public function create($clinic_id)
	{
		return View::make('appointments.create');
	}

	/**
	 * Store a newly created appointment in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Appointment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Appointment::create($data);

		return Redirect::route('appointments.index');
	}

	/**
	 * Display the specified appointment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$appointment = Appointment::findOrFail($id);

		return View::make('appointments.show', compact('appointment'));
	}

	public function patientAppointments($id)
	{
		$appointments = Appointment::where('patient_id', $id)->get();
		// return Response::json($appointments);
		return  View::make('Appointments.patientAppointments', array('appointments' => $appointments));
	}


	/**
	 * Show the form for editing the specified appointment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$appointment = Appointment::find($id);

		return View::make('appointments.edit', compact('appointment'));
	}

	/**
	 * Update the specified appointment in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$appointment = Appointment::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Appointment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$appointment->update($data);

		return Redirect::route('appointments.index');
	}

	/**
	 * Remove the specified appointment from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Appointment::destroy($id);

		return Redirect::route('appointments.index');
	}

}
