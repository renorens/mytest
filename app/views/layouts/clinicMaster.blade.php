<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>My Clinic</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
		<link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">
		<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bootswatch.min.css') }}"> -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-switch.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	</head>
    <body>
    	<div class="navbar navbar-default">
		  <div class="navbar-header">
		    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse"> -->
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      @if (Session::has('clinic'))
		    	<a class="navbar-brand" href="{{ asset('myClinic') }}">{{Session::get('clinic')->name}}</a>
		      @endif

		  </div>
		  <div class="navbar-collapse collapse navbar-inverse-collapse">
		    <ul class="nav navbar-nav">
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('static.appointments') }}<b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">{{ trans('static.newappointment') }}</a></li>
		          <li><a href="{{ asset('appointment/index')}}">Clinic Appointments</a></li>
		        </ul>
		      </li>
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('static.patients') }}<b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="{{ asset('patients/create')}}"><i class="fa fa-plus-square-o fa-sm"></i>&nbsp{{ trans('static.addpatient') }}</a></li>
		          <li><a href="{{ asset('patients/index')}}"><i class="fa fa-list fa-sm"></i>&nbspAll Patinets</a></li>
		        </ul>
		      </li>
		    </ul>
		    <form class="navbar-form navbar-left">
		      <input type="text" class="form-control col-lg-8" placeholder="Search Patients">
		    </form>
		    <ul class="nav navbar-nav navbar-right">
		    	@if (Confide::user())
		        	<li><a href="{{ asset('users/logout') }}">{{ trans('static.logout') }}</a></li>
		   		@else
		   			<li><a href="{{ asset('login') }}">{{ trans('static.login') }}</a></li>
		   		@endif
		      <li><a href="/">{{ trans('static.home') }}</a></li>
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Billing <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Action</a></li>
		          <li><a href="#">Another action</a></li>
		          <li><a href="#">Something else here</a></li>
		          <li class="divider"></li>
		          <li><a href="#">Separated link</a></li>
		        </ul>
		      </li>
		    </ul>
		  </div>
		</div>
<script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootswatch.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-switch.js') }}"></script>

   <div class="container">
        @yield('content')
    </div>
    </body>
</html>