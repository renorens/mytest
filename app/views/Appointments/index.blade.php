@extends('layouts.clinicMaster')
@section('content')
	<table class="table table-striped table-hover ">
		<thead>
			<tr>
		      <th>Appointment#</th>
		      <th>Patient Name</th>
		      <th>DOB</th>
		      <th>Date/Time</th>
		      <th>Notes</th>
		    </tr>
		</thead>
		<tbody>
			@foreach ($appointments as $appointment)
				<tr class="info">
					<td>{{ $appointment['id'] }}</td>
					<td>{{ $appointment['patientName'] }}</td>
					<td>{{ $appointment['patientDob'] }}</td>
					<td>{{ $appointment['appointmentDate'] }}</td>
					<td>notes</td>
				</tr>		
			@endforeach
		</tbody>
	</table>
@stop