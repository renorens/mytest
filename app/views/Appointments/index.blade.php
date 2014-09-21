@extends('layouts.clinicMaster')
@section('content')
	<table class="table table-striped table-hover">
		<thead>
			<tr>
		      <th>Appointment ID</th>
		      <th>Patient Name</th>
		      <th>DOB</th>
		      <th>Date/Time</th>
		      <th>Notes</th>
		    </tr>
		</thead>
		<tbody>
			@foreach ($appointments as $appointment)
				<tr class="info">
					<td><b><u>{{ $appointment['id'] }}</u></b></td>
					<td><b>{{ $appointment['patientName'] }}</b></td>
					<td>{{ $appointment['patientDob'] }}</td>
					<td>{{ $appointment['appointmentDate'] }}</td>
					<td>notes</td>
				</tr>		
				<tr class="info">
					<td><b><u>{{ $appointment['id'] }}</u></b></td>
					<td><b>{{ $appointment['patientName'] }}</b></td>
					<td>{{ $appointment['patientDob'] }}</td>
					<td>{{ $appointment['appointmentDate'] }}</td>
					<td>notes</td>
				</tr>
				<tr class="info">
					<td><b><u>{{ $appointment['id'] }}</u></b></td>
					<td><b>{{ $appointment['patientName'] }}</b></td>
					<td>{{ $appointment['patientDob'] }}</td>
					<td>{{ $appointment['appointmentDate'] }}</td>
					<td>notes</td>
				</tr>
				<tr class="info">
					<td><b><u>{{ $appointment['id'] }}</u></b></td>
					<td><b>{{ $appointment['patientName'] }}</b></td>
					<td>{{ $appointment['patientDob'] }}</td>
					<td>{{ $appointment['appointmentDate'] }}</td>
					<td>notes</td>
				</tr>
				<tr class="info">
					<td><b><u>{{ $appointment['id'] }}</u></b></td>
					<td><b>{{ $appointment['patientName'] }}</b></td>
					<td>{{ $appointment['patientDob'] }}</td>
					<td>{{ $appointment['appointmentDate'] }}</td>
					<td>notes</td>
				</tr>
				<tr class="info">
					<td><b><u>{{ $appointment['id'] }}</u></b></td>
					<td><b>{{ $appointment['patientName'] }}</b></td>
					<td>{{ $appointment['patientDob'] }}</td>
					<td>{{ $appointment['appointmentDate'] }}</td>
					<td>notes</td>
				</tr>
				<tr class="info">
					<td><b><u>{{ $appointment['id'] }}</u></b></td>
					<td><b>{{ $appointment['patientName'] }}</b></td>
					<td>{{ $appointment['patientDob'] }}</td>
					<td>{{ $appointment['appointmentDate'] }}</td>
					<td>notes</td>
				</tr>
				<tr class="info">
					<td><b><u>{{ $appointment['id'] }}</u></b></td>
					<td><b>{{ $appointment['patientName'] }}</b></td>
					<td>{{ $appointment['patientDob'] }}</td>
					<td>{{ $appointment['appointmentDate'] }}</td>
					<td>notes</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop