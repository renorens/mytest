<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>My Clinic</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
		<link rel="shortcut icon" href="{{ asset('images/icon.ico') }}">
		<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bootswatch.min.css') }}"> -->
	</head>
    <body>
    	<div class="navbar navbar-default">
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="#">@yield('clinicName')</a>
		  </div>
		  <div class="navbar-collapse collapse navbar-inverse-collapse">
		    <ul class="nav navbar-nav">
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Appointments <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Action</a></li>
		          <li><a href="#">Another action</a></li>
		          <li><a href="#">Something else here</a></li>
		          <li class="divider"></li>
		          <li class="dropdown-header">Dropdown header</li>
		          <li><a href="#">Separated link</a></li>
		          <li><a href="#">One more separated link</a></li>
		        </ul>
		      </li>
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patients <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Action</a></li>
		          <li><a href="#">Another action</a></li>
		          <li><a href="#">Something else here</a></li>
		          <li class="divider"></li>
		          <li class="dropdown-header">Dropdown header</li>
		          <li><a href="#">Separated link</a></li>
		          <li><a href="#">One more separated link</a></li>
		        </ul>
		      </li>
		    </ul>
		    <form class="navbar-form navbar-left">
		      <input type="text" class="form-control col-lg-8" placeholder="Search Patients">
		    </form>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="/">Home</a></li>
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
       <div class="container">
            @yield('content')
        </div>
    </body>
</html>