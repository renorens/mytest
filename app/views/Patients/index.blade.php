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
		      <th>Edit</th>
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
					<td><a href="{{ asset('patients/edit\/') }}{{ $patient->id}}"><i class="fa fa-pencil fa-fw"></i> Edit</a></td>
					<td>
						<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_confirmation"><i class="fa fa-trash fa-fw"></i> </button>
						<div class="modal fade" id="delete_confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
						      </div>
						      <div class="modal-body">
						        Are you sure you want to delete patient : <b>{{ $patient->name }}?</b>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times fa-lg"></i> Close</button>
						        <a href="{{ asset('patients/delete\/') }}{{ $patient->id}}" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>
						      </div>
						    </div>
						  </div>
						</div>
					</td>
				</tr>				
			@endforeach
		</tbody>
	</table>
	<div class="row">

		<div class="col-xs-3 content col-xs-offset-10">
			<?php echo $patients->links(); ?>
		</div>
	</div>
@stop