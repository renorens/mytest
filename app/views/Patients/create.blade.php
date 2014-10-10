@extends('layouts.clinicMaster')
@section('content')
    <h3 class="text-success"><b>Add Patient</b></h3>
<div class="col-lg-8">
  <div class="well bs-component">
    <form class="form-horizontal" id="personal_info_form" method="POST" action="{{ asset('patients/store') }}">
      <fieldset>
        <div class="form-group">
            <div class="col-sm-3">
              <label for="name" class="col-lg-2 control-label">{{ trans('forms.new.patient.fname') }}</label>
            </div>
            <div class="col-md-6">
              @if(Session::has('patient'))
              <input type="text" class="form-control" name="name" id="name" placeholder="{{ trans('forms.new.patient.fname') }}" value="{{ Session::get('patient')->name }}">
              @else
              <input type="text" class="form-control" name="name" id="name" placeholder="{{ trans('forms.new.patient.fname') }}">
              @endif
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3">
              <label for="gender" class="col-lg-2 control-label">{{ trans('forms.new.patient.gender') }}</label>
            </div>
            <div class="col-md-6">
              <div id="change-color-switch" data-on-label="M" data-off-label="F" class="make-switch" data-on="primary" data-off="success">
                <input type="checkbox" name="gender" id="gender" checked>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3">
              <label for="dob" class="col-lg-2 control-label">{{ trans('forms.new.patient.dob') }}</label>
            </div>
            <div class="col-md-6">
              <input type="date" class="form-control" name="dob" id="dob">
            </div>
          </div>
        </fieldset>
        <input type="text" name="formName" hidden value="baseForm" />
        <fieldset>
          <ul class="pager">
            <li><input type="submit" class="btn btn-primary" value="Create Patient"/></li>
          </ul>
        </fieldset>
    </form>
  </div>
</div>
@stop
