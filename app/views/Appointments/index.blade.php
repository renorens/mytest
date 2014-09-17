@extends('layouts.clinicMaster')
@section('content')
	<table>
		<th>Appointments</th>
		@foreach ($appointments as $appointment)
		<tr>
			<td><b>Name </b></td>
			<td> {{ $appointment->first_name }} {{ $appointment->last_name }}</td>
		</tr>
		<tr>
			<td><b>Date of Birth </b></td>
			<td>{{ $appointment->dob }}</td>
		</tr>
		<tr>
			<td>--------------------------------------</td>
		</tr>
		@endforeach

	</table>
@stop