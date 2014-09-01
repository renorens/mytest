@extends('layouts.clinicMaster')
@section('clinicName')
{{$clinic->name}}
@stop
@section('content')
<!-- 	 <fieldset>
	 	<ul>
	 		<br/><br/>
	 	Hello {{$user->username}}!
	 	Here is a list of your appointments:<br/>
	 	@foreach ($appointments as $appointment)
	 		appointment : {{$appointment->description}}
	 		@ : {{$appointment->date}}
	 	@endforeach
	 	</ul>
	 	<div>
	 	<a href="#">All Appointments</a>
	 	<a href="#">New Patient</a>
	 	<a href="appointment/create/{{$clinic->id}}">Schedule appointment</a>
	 	<a href="#">Patient Lookup</a>
	 	<a href="#">Lab Test Lookup</a>

	 		
	 	</div>
	 </fieldset> -->
@stop