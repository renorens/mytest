@extends('layouts.clinicMaster')
@section('content')
    <header><h2>Patient Address</h2></header>
<div class="col-lg-8">
  <div class="well bs-component">
	  <form class="form-horizontal" id="contact_form" method="POST" action="{{ asset('patients/store') }}">
	    <div class="form-group">
	      <div class="col-sm-3">
	        <label for="address" class="col-lg-2 control-label">{{ trans('forms.new.patient.address') }}</label>
	      </div>
	      <div class="col-md-6">
	        <input type="text" class="form-control" name="address" id="address" placeholder="Street Address">
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-3">
	        <label for="country" class="col-lg-2 control-label">{{ trans('forms.new.patient.city') }}</label>
	      </div>
	      <div class="col-md-6">
	        <select class="form-control" name="city" id="city">
	          <option value="ramallah">Ramallah</option>
	          <option value="nablus">Nablus</option>
	          <option value="jenin">Jenin</option>
	          <option value="jerico">Jerico</option>
	          <option value="hebron">Hebron</option>
	        </select>
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-3">
	        <label for="country" class="col-lg-2 control-label">{{ trans('forms.new.patient.country') }}</label>
	      </div>
	      <div class="col-md-6">
	        <select class="form-control" name="country" id="country">
	          <option value="ramallah">Palestine</option>
	          <option value="nablus">Jordan</option>
	          <option value="jenin">Syria</option>
	          <option value="jerico">Saudi Arabia</option>
	          <option value="hebron">Lebanon</option>
	        </select>
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-3">
	        <label for="phone" class="col-lg-2 control-label">{{ trans('forms.new.patient.phone') }}</label>
	      </div>
	      <div class="col-md-6">
	        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Home Phone">
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-3">
	        <label for="mobile" class="col-lg-2 control-label">{{ trans('forms.new.patient.mobile') }}</label>
	      </div>
	      <div class="col-md-6">
	        <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Mobile Phone">
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-3">
	        <label for="email" class="col-lg-2 control-label">{{ trans('forms.new.patient.email') }}</label>
	      </div>
	      <div class="col-md-6">
	        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
	      </div>
	    </div>
	    <input type="text" name="formName" hidden value="addressForm" />
        <fieldset>
          <ul class="pager">
          	<li><a href="#">Previous</a></li>
            <li><input type="submit" class="btn btn-primary" value="Next"/> </li>
          </ul>
        </fieldset>
	  </form>

  </div>
</div>

@stop