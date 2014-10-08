@extends('layouts.master')
@section('content')
<br /><br /><br /><br /><br />
<div class="col-md-5 col-md-offset-3">
	<form class="form-horizontal" action="users/login" method="POST">
	<legend>Login</legend>
	<div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
  <input class="form-control" name="email" id="emaill" type="text" placeholder="Email address">
</div>
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" name="password" id="password" type="password" placeholder="Password">
</div>
<div class="form-group">
  <div class="col-lg-10 col-lg-offset-5">
    <br /><button type="submit" class="btn btn-primary"><i class="fa fa-user-md fa-2x"></i>&nbsp;&nbsp;<b>Login</b></button>
  </div>
</div>
</form>
</div>
<!-- 	  <fieldset>
	    <legend>Login</legend>
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
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
	    </div>
	  </fieldset> -->
	</form>
</div>
@stop
