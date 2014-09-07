@extends('layouts.clinicMaster')
@section('content')
<div class="col-lg-13">
          <div class="col-lg-6">
            <div class="well bs-component">
            <form class="form-horizontal" method="POST" action="{{ asset('patients/store') }}">
                <fieldset>
                  <legend>{{ trans('forms.new.patient.legend') }}</legend>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="firstName" class="col-lg-2 control-label">First Name</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="lastName" class="col-lg-2 control-label">Last Name</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="gender" class="col-lg-2 control-label">Gender</label>
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="gender" value="male"> Male
                      <input type="radio" name="gender" value="female"> Female
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="dob" class="col-lg-2 control-label">Birthday</label>
                    </div>
                    <div class="col-md-6">
                      <input type="date" class="form-control" name="dob" id="dob" name="dob">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="address" class="col-lg-2 control-label">Address</label>
                    </div>
                    <div class="col-md-6">
                      <textarea class="form-control" rows="3" name="address" id="address"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="city" class="col-lg-2 control-label">City</label>
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
                      <label for="phone" class="col-lg-2 control-label">Phone</label>
                    </div>
                    <div class="col-md-6">
                      <input type="tel" class="form-control" name="phone" id="phone" placeholder="Home Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="mobile" class="col-lg-2 control-label">Mobile</label>
                    </div>
                    <div class="col-md-6">
                      <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Mobile Phone">
                    </div>
                  </div>
                </fieldset>
                <fieldset>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="email" class="col-lg-2 control-label">Email <i>(optional)</i></label>
                    </div>
                    <div class="col-md-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="emergencyName" class="col-lg-2 control-label">Emergency Contact</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="emergencyName" id="emergencyName" placeholder="Contact Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="emergencyPhone" class="col-lg-2 control-label">Mobile</label>
                    </div>
                    <div class="col-md-6">
                      <input type="tel" class="form-control" name="emergencyPhone" id="emergencyPhone" placeholder="Contact Mobile">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="emergencyRelationship" class="col-lg-2 control-label">Relationship</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="emergencyRelationship" id="emergencyRelationship" placeholder="Relationship">
                    </div>
                  </div>
                </fieldset>
                <fieldset>
                   <div class="col-lg-10 col-lg-offset-4">
                    <button type="submit" class="btn btn-primary">Next <i>(health info)</i></button>
                   </div>
                </fieldset>
                <input type="hidden" name="clinic_id" value="{{Session::get('clinic')->id}}">
              </form>
            </div>
          </div>
    </div>
@stop
