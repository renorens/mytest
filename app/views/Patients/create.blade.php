@extends('layouts.clinicMaster')
@section('content')
<div class="col-lg-13">
  <ul class="nav nav-tabs">
  <li class="active"><a href="#personalInfoForm" data-toggle="tab">Personal Info</a></li>
  <li class=""><a href="#contact" data-toggle="tab">Contact</a></li>
  <li class=""><a href="#emergencyForm" data-toggle="tab">Emergency</a></li>
   <li class=""><a href="#healthForm" data-toggle="tab">Health</a></li>
  </ul>

    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="personalInfoForm">
        <div class="col-lg-8">
          <div class="well bs-component">
            <form class="form-horizontal" method="POST" action="{{ asset('patients/store') }}">
              <fieldset>
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
              </fieldset>
            </form>
          </div>  
        </div>
      </div>
      <div class="tab-pane fade" id="contact">
        <div class="col-lg-8">
          <div class="well bs-component">
          <form class="form-horizontal" method="POST" action="{{ asset('patients/store') }}">
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

          </form>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="emergencyForm">
        <div class="col-lg-8">
          <div class="well bs-component">
          <form class="form-horizontal" method="POST" action="{{ asset('patients/store') }}">
            <fieldset>
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
          </form>
        </div>
      </div>  
      </div>
      <div class="tab-pane fade" id="healthForm">
        <div class="col-lg-8">
          <div class="well bs-component">
          <form class="form-horizontal" method="POST" action="{{ asset('patients/store') }}">
            <fieldset>
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="diabetic" class="col-lg-2 control-label">Diabetic</label>
                </div>
                <div class="col-md-6">
                  <input type="radio" name="diabetic" value="true"> Yes
                  <input type="radio" name="diabetic" value="fale"> No
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="heart" class="col-lg-2 control-label">Heart Disease</label>
                </div>
                <div class="col-md-6">
                  <input type="radio" name="heart" value="true"> Yes
                  <input type="radio" name="heart" value="fale"> No
                </div>
              </div>
            </fieldset>
          </form>
          </div>
        </div>
      </div>
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <a type="submit" class="btn btn-success btn-lg btn-block">Submit</a>
  </div>
@stop
