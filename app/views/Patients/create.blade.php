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
              <input type="date" class="form-control" name="dob" id="dob" name="dob">
            </div>
          </div>
        </fieldset>
        <input type="text" name="formName" hidden value="baseForm" />
        <fieldset>
          <ul class="pager">
            <!-- <li><input type="submit" class="btn btn-primary" value="Add "/></li> -->
            <!-- <li><a href="#">Add Address</a></li> -->
            <li><input type="submit" class="btn btn-primary" value="Create Patient"/></li>
          </ul>
        </fieldset>
    </form>
  </div>
</div>

<!-- 
<div class="col-lg-13">
  <ul class="nav nav-tabs">
  <li class="active"><a href="#personalInfoForm" data-toggle="tab">{{ trans('forms.new.patient.personal') }}</a></li>
  <li class=""><a href="#contact" data-toggle="tab">{{ trans('forms.new.patient.contact') }}</a></li>
  <li class=""><a href="#emergencyForm" data-toggle="tab">{{ trans('forms.new.patient.emergency') }}</a></li>
   <li class=""><a href="#healthForm" data-toggle="tab">{{ trans('forms.new.patient.health') }}</a></li>
  </ul>

    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="personalInfoForm">
        <div class="col-lg-8">
          <div class="well bs-component">
            <form class="form-horizontal" id="personal_info_form" method="POST" action="{{ asset('patients/store') }}">
              <fieldset>
                <div class="form-group">
                    <div class="col-sm-3">
                      <label for="name" class="col-lg-2 control-label">{{ trans('forms.new.patient.fname') }}</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="name" id="name" placeholder="{{ trans('forms.new.patient.fname') }}">
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
                      <input type="date" class="form-control" name="dob" id="dob" name="dob">
                    </div>
                  </div>
                  <br /><br /><br /><br /><br /><br /><br /><br />


              </fieldset>
            </form>
          </div>  
        </div>
      </div>
      <div class="tab-pane fade" id="contact">
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
          </form>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="emergencyForm">
        <div class="col-lg-8">
          <div class="well bs-component">
          <form class="form-horizontal" id="emergency_form" method="POST" action="{{ asset('patients/store') }}">
            <fieldset>
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="emergencyName" class="col-lg-2 control-label">{{ trans('forms.new.patient.emergency.name') }}</label>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="emergencyName" id="emergencyName" placeholder="Contact Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="emergencyPhone" class="col-lg-2 control-label">{{ trans('forms.new.patient.mobile') }}</label>
                </div>
                <div class="col-md-6">
                  <input type="tel" class="form-control" name="emergencyPhone" id="emergencyPhone" placeholder="Contact Mobile">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="emergencyRelationship" class="col-lg-2 control-label">{{ trans('forms.new.patient.emergency.rel') }}</label>
                </div>
                <div class="col-md-6">
                <select class="form-control" name="emergencyRelationship" id="emergencyRelationship">
                  <option value="mother">{{ trans('forms.new.patient.mother') }}</option>
                  <option value="father">{{ trans('forms.new.patient.father') }}</option>
                  <option value="brother">{{ trans('forms.new.patient.brother') }}</option>
                  <option value="sister">{{ trans('forms.new.patient.sister') }}</option>
                  <option value="husband">{{ trans('forms.new.patient.husband') }}</option>
                  <option value="wife">{{ trans('forms.new.patient.wife') }}</option>
                  <option value="other">Other</option>
                </select>
              </div>
              </div>
              <br /><br /><br /><br /><br /><br /><br /><br />
            </fieldset>
          </form>
        </div>
      </div>  
      </div>
      <div class="tab-pane fade" id="healthForm">
        <div class="col-lg-8">
          <div class="well bs-component">
          <form class="form-horizontal" id="health_form" method="POST" action="{{ asset('patients/store') }}">
            <fieldset>
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="diabetic" class="col-lg-2 control-label">Diabetic</label>
                </div>
                <div class="col-md-6">
                  <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="diabetic">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="heart" class="col-lg-2 control-label">Heart Disease</label>
                </div>
                <div class="col-md-6">
                  <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="heart_disease" id="heart_disease">
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
          </div>
        </div>
      </div>
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br />
    <a type="button" id="submitForms" class="btn btn-success btn-lg btn-block">Add Patient</a>
  </div> -->
@stop
