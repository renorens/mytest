@extends('layouts.clinicMaster')
@section('content')
	<table>
		<th>Patients</th>
		@foreach ($patinets as $patient)
		<tr>
			<td><b>Name </b></td>
			<td> {{ $patient->first_name }} {{ $patient->last_name }}</td>
		</tr>
		<tr>
			<td><b>Date of Birth </b></td>
			<td>{{ $patient->dob }}</td>
		</tr>
		<tr>
			<td>--------------------------------------</td>
		</tr>
		@endforeach

	</table>
@stop