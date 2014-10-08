@extends('layouts.clinicMaster')
@section('content')
<div class="well well-lg">
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
          <div class="container">
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
                <i class="fa fa-mobile fa-lg"></i>&nbsp;&nbsp;&nbsp;{{ $patient->mobile }}
              @endif
              </div>
              <div class="col-sm-3">
                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#delete_confirmation"><i class="fa fa-edit fa-lg"></i>&nbsp;Add/Edit</button>
                <div class="modal fade" id="delete_confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
    </div>
  </div>
  
</div>

@stop