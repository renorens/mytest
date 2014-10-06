@extends('layouts.clinicMaster')
@section('content')
<div class="col-lg-8">
  <div class="well bs-component">
  <h2>{{ $patient->name }}</h2>
  <div class="panel-group" id="accordion">
  <div class="panel panel-default" id="panel1">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-target="#collapseOne" 
           href="#collapseOne">
          <p  class="text-success">+ Add contact information</p>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
      	<form class="form-horizontal" id="contact_form" method="POST" action="{{ asset('patients/update\/') }}{{ $patient->id}}">
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
              	<input list="city" class="form-control" name="city" placeholder="City">
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
                <input list="country" class="form-control" name="country" placeholder="Country">
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
            <input type="hidden" name="form_name" value="addressForm" >
            <div class="col-lg-10 col-lg-offset-4">
              <button type="submit" class="btn btn-primary">Add contact info</button>
            </div>
          </form>
      </div>
    </div>
  </div>
  <div class="panel panel-default" id="panel2">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-target="#collapseTwo" 
           href="#collapseTwo" class="collapsed">
          <p  class="text-success">+ Add Emergency contact</p>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default" id="panel3">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-target="#collapseThree"
           href="#collapseThree" class="collapsed">
          <p  class="text-success">+ Health Profile</p>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
<!--   <ul>
  	<li><a href="">Contact Information</a></li>
  	<li><a href="">Add Emergenct Contact</a></li>
  	<li><a href="">Health Profile</a></li>
  </ul> -->
  </div>
 </div>
@stop