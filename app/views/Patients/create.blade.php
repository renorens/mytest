@extends('layouts.clinicMaster')
@section('content')
<div class="col-md-5 col-md-offset-3">
	<form class="form-horizontal" action="patients/create" method="POST">
	  <fieldset>
	    <legend>{{ trans('static.legendNewPatient') }}</legend>
	    <div class="form-group">
	      <label for="email" class="col-lg-2 control-label">Email</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="password" class="col-lg-2 control-label">Password</label>
	      <div class="col-lg-10">
	        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
	        <div class="checkbox">
	          <label>
	            <input type="checkbox"> Remember me
	          </label>
	        </div>
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button class="btn btn-default">Cancel</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
	    </div>
	  </fieldset>
	</form>
</div>
@stop
