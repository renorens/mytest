@extends('layouts.clinicMaster')
@section('content')
<div class="well">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
          @if ($patient->gender == 'Male')
            <h2><i class="fa fa-male fa-lg"></i>&nbsp;&nbsp;{{ $patient->name }}</h2>
          @else
            <h2><i class="fa fa-female fa-lg"></i>&nbsp;&nbsp;{{ $patient->name }}</h2>
          @endif
          <h3>Age &nbsp;{{$patient->age}}</h3>
        </div>
        <div class="col-md-6">
          <h2>Contact Info</h2>
          <!-- <div class="container"> -->
            <div class="row">
              <div class="col-sm-3">
              @if ($patient->address != '')
                <b>{{ $patient->address }}</b>
              @endif
              @if ($patient->city != '')
                <b> , {{ $patient->city }} </b>
              @endif
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
              @if ($patient->phone != '')
                <i class="fa fa-phone fa-lg"></i>&nbsp;{{ $patient->phone }}
              @endif
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
              @if ($patient->mobile != '')
                <i class="fa fa-mobile fa-lg"></i>&nbsp;&nbsp;&nbsp;{{ "(".substr($patient->mobile, 0, 3).") ".substr($patient->mobile, 3, 3)."-".substr($patient->mobile,6) }}
              @endif
              </div>
              <div class="col-sm-3 col-md-offset-3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_address"><i class="fa fa-edit fa-lg"></i>&nbsp;Add/Edit</button>
                <div class="modal fade" id="add_address" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add/Edit Contact</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" id="contact_form" method="POST" action="{{ asset('patients/update\/') }}{{ $patient->id}}">
            <div class="form-group">
              <div class="col-sm-3">
                <label for="address" class="col-lg-2 control-label">{{ trans('forms.new.patient.address') }}</label>
              </div>
              <div class="col-md-6">
                @if ($patient->address == '')
                <input type="text" class="form-control" name="address" id="address" placeholder="Street Address">
                @else
                <input type="text" class="form-control" name="address" id="address" value="{{ $patient->address }}">
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-3">
                <label for="country" class="col-lg-2 control-label">{{ trans('forms.new.patient.city') }}</label>
              </div>
              <div class="col-md-6">
               @if ($patient->city == '')
                <input list="city" class="form-control" name="city" placeholder="City" >
               @else
                <input list="city" class="form-control" name="city" value="{{$patient->city}}" >
               @endif
                <datalist id="city">
                  <option value="Ramallah">Ramallah</option>
                  <option value="Nablus">Nablus</option>
                  <option value="Jenin">Jenin</option>
                  <option value="Jerico">Jerico</option>
                  <option value="Hebron">Hebron</option>
                </datalist>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-3">
                <label for="country" class="col-lg-2 control-label">{{ trans('forms.new.patient.country') }}</label>
              </div>
              <div class="col-md-6">
               @if ($patient->country == '')
                <input list="country" class="form-control" name="country" placeholder="Country">
               @else
                <input list="country" class="form-control" name="country" value="{{$patient->country}}">
               @endif
                <datalist id="country">
                  <option value="Palestine">Palestine</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Syria">Syria</option>
                  <option value="Saudi-Arabia">Saudi-Arabia</option>
                  <option value="Lebanon">Lebanon</option>
                </datalist>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-3">
                <label for="phone" class="col-lg-2 control-label">{{ trans('forms.new.patient.phone') }}</label>
              </div>
              <div class="col-md-6">
               @if ($patient->phone == '')
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Home Phone">
               @else
                <input type="tel" class="form-control" name="phone" id="phone" value="{{$patient->phone}}">
               @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-3">
                <label for="mobile" class="col-lg-2 control-label">{{ trans('forms.new.patient.mobile') }}</label>
              </div>
              <div class="col-md-6">
               @if($patient->mobile == '')
                <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Mobile Phone">
               @else
                <input type="tel" class="form-control" name="mobile" id="mobile" value="{{$patient->mobile}}">
               @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-3">
                <label for="email" class="col-lg-2 control-label">{{ trans('forms.new.patient.email') }}</label>
              </div>
              <div class="col-md-6">
               @if ($patient->email == '')
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
               @else
                <input type="email" class="form-control" name="email" id="email" value="{{$patient->email}}">
               @endif
              </div>
            </div>
            <input type="hidden" name="form_name" value="addressForm" >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times fa-lg"></i> Close</button>
            <button type="submit" class="btn btn-primary">Add contact info</button>
          </div>
          </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <h3>Emergency Contact</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
          {{$patient->emergency_contact_name}}
          </div>
          <div class="col-md-3">
          @if ($patient->emergency_contact_phone != '')
          <i class="fa fa-mobile fa-lg"></i>&nbsp;{{"(".substr($patient->emergency_contact_phone, 0, 3).") ".substr($patient->emergency_contact_phone, 3, 3)."-".substr($patient->emergency_contact_phone,6)}}
          @endif
          </div>
          <div class="col-md-3">
          {{$patient->emergency_contact_relationship}}
          </div>
          <div class="col-md-3">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_emergency"><i class="fa fa-edit fa-lg"></i>&nbsp;Add/Edit</button>
          <div class="modal fade" id="add_emergency" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add/Edit Emergency Contact</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" id="emergency_form" method="POST" action="{{ asset('patients/update\/') }}{{ $patient->id}}">
                    <fieldset>
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label for="emergencyName" class="col-lg-2 control-label">{{ trans('forms.new.patient.emergency.name') }}</label>
                        </div>
                        <div class="col-md-6">
                        @if ($patient->emergency_contact_name == '')
                          <input type="text" class="form-control" name="emergencyName" id="emergencyName" placeholder="Contact Name">
                        @else
                          <input type="text" class="form-control" name="emergencyName" id="emergencyName" value="{{$patient->emergency_contact_name}}">
                        @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label for="emergencyPhone" class="col-lg-2 control-label">{{ trans('forms.new.patient.mobile') }}</label>
                        </div>
                        <div class="col-md-6">
                        @if ($patient->emergency_contact_phone == '')
                          <input type="tel" class="form-control" name="emergencyPhone" id="emergencyPhone" placeholder="Contact Mobile">
                        @else
                          <input type="tel" class="form-control" name="emergencyPhone" id="emergencyPhone" value="{{$patient->emergency_contact_phone}}">
                        @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label for="emergencyRelationship" class="col-lg-2 control-label">{{ trans('forms.new.patient.emergency.rel') }}</label>
                        </div>
                        <div class="col-md-6">
                        @if ($patient->emergency_contact_relationship == '')
                          <input list="emergencyRelationship" class="form-control" name="emergencyRelationship" placeholder="Relationship">
                         @else
                          <input list="emergencyRelationship" class="form-control" name="emergencyRelationship" value="{{$patient->emergency_contact_relationship}}">
                         @endif
                          <datalist id="emergencyRelationship">
                            <option value="Mother">{{ trans('forms.new.patient.mother') }}</option>
                            <option value="Father">{{ trans('forms.new.patient.father') }}</option>
                            <option value="Brother">{{ trans('forms.new.patient.brother') }}</option>
                            <option value="Sister">{{ trans('forms.new.patient.sister') }}</option>
                            <option value="Husband">{{ trans('forms.new.patient.husband') }}</option>
                            <option value="Wife">{{ trans('forms.new.patient.wife') }}</option>
                            <option value="Other">Other</option>
                          </datalist>
                      </div>
                      </div>
                    </fieldset>
                    <input type="hidden" name="form_name" value="emergencyForm" >
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times fa-lg"></i> Close</button>
                    <button type="submit" class="btn btn-primary">Add Emergency Contact</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-3">
      <h3>Health Profile</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3 col-sm-offset-9">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_health_profile"><i class="fa fa-edit fa-lg"></i>&nbsp;Add/Edit</button>
      <div class="modal fade" id="add_health_profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Add/Edit Health Profile</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" id="contact_form" method="POST" action="{{ asset('patients/update\/') }}{{ $patient->id}}">
                <div class="row">
                  <div class="col-sm-2">
                    Diabetic
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="diabetic">
                    </div>
                  </div>
                  <div class="col-md-2 col-md-offset-2">
                    Blood-Pressure
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="blloodPressure">
                    </div>
                  </div>
                </div>
                <div class="row">
                  &nbsp;
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    Smoker
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="smoker">
                    </div>
                  </div>
                  <div class="col-sm-2 col-sm-offset-2">
                    Hookah
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="hookah">
                    </div>
                  </div>
                </div>
                <div class="row">
                  &nbsp;
                </div>
                <div class="row">
                @if ($patient->gender == 'female')
                  <div class="col-sm-2">
                    Pregnant
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="pregnant">
                    </div>
                  </div>
                @else
                  <div class="col-sm-2">
                    Male?
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="pregnant">
                    </div>
                  </div>
                @endif
                  <div class="col-sm-2 col-sm-offset-2">
                    Vascular
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="vascular">
                    </div>
                  </div>
                </div>
                <div class="row">
                  &nbsp;
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    Cancer
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="cancer">
                    </div>
                  </div>
                  <div class="col-md-2 col-md-offset-2">
                    Recent Fractures
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="recentFractures">
                    </div>
                  </div>
                </div>
                <div class="row">
                  &nbsp;
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    Heart Disease
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="heartDisease">
                    </div>
                  </div>
                  <div class="col-md-2 col-md-offset-2">
                    Kidney Disease
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="kidneyDisease">
                    </div>
                  </div>
                </div>
                <div class="row">
                  &nbsp;
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    Infections
                  </div>
                  <div class="col-sm-2">
                    <div id="change-color-switch" data-on-label="YES" data-off-label="NO" class="make-switch switch-small" data-on="danger" data-off="success">
                      <input type="checkbox" name="infections">
                    </div>
                  </div>
                  <div class="col-md-2 col-md-offset-2">
                    <label for="dob" class="col-lg-2 control-label">Work Field</label>
                  </div>
                  <div class="col-sm-2">
                    <input type="text" name="workField" size="30" class="form-control" placeholder="Work Field">
                  </div>
                </div>

              </form>
            </div>
          </div>  
        </div>
      </div>  
    </div>
  </div>
  @if ($patient->healthProfile != null)
    <div class="row">
      <div class="col-sm-2">
        Diabetic
      </div>
      <div class="col-sm-2">
      </div>
    </div>
  @else
    <div class="row">
      There is currently no health profile for this patient.
    </div>
  @endif
  </div>
</div>
</div>
@stop