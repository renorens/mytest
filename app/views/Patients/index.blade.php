@extends('layouts.clinicMaster')
@section('content')
	<table class="table table-striped table-hover">
		<thead>
			<tr>
			  <th>Patient ID</th>
		      <th>Patient Name</th>
		      <th>DOB</th>
		      <th>Appointments List</th>
		      <th>Health Profile</th>
		      <th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($patients as $patient)
				<tr class="info">
					<td>{{ $patient->id }}</td>
					<td>{{ $patient->name }}</td>
					<td>{{ $patient->dob }}</td>
					<td><a href="{{ asset('appointment/patient\/') }}{{ $patient->id}}">Appointments</a></td>
					<td><a href="#">Health Profile</a></td>
					<td><a href="{{ asset('patients/delete\/') }}{{ $patient->id}}" class="btn btn-danger">Delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop