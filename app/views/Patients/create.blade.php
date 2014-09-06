@extends('layouts.clinicMaster')
@section('content')
<div class="col-sm-8">
          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal">
                <fieldset>
                  <legend>{{ trans('forms.new.patient.legend') }}</legend>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="firstName" class="col-lg-2 control-label">First Name</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="firstName" placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="lastName" class="col-lg-2 control-label">Last Name</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="LastName" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="gender" class="col-lg-2 control-label">Gender</label>
                    </div>

                   <div id="gender" class="make-switch" data-on="default" data-off="primary">
                    <input type="checkbox" checked>
                   </div>


                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="address" class="col-lg-2 control-label">Address</label>
                    </div>
                    <div class="col-md-6">
                      <textarea class="form-control" rows="3" id="address"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="city" class="col-lg-2 control-label">City</label>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control" id="select">
                        <option>Ramallah</option>
                        <option>Nablus</option>
                        <option>Jenin</option>
                        <option>Jerico</option>
                        <option>Hebron</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="phone" class="col-lg-2 control-label">Phone</label>
                    </div>
                    <div class="col-md-6">
                      <input type="tel" class="form-control" id="phone" placeholder="Home Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="mobile" class="col-lg-2 control-label">Mobile</label>
                    </div>
                    <div class="col-md-6">
                      <input type="tel" class="form-control" id="mobile" placeholder="Mobile Phone">
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
    </div>
@stop
