<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Doctor</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
		<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bootswatch.min.css') }}"> -->
	</head>
    <body>
        <div class="navbar navbar-default">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/"><b>Doctor</b></a>
		    </div>
		    <div class="navbar-collapse collapse navbar-responsive-collapse">
		      <ul class="nav navbar-nav">
		      	<li><a href="/"><b>Home</b></a></li>
		        <li><a href="services"><b>Services</b></a></li>
		        <li><a href="plans"><b>Enrollment Plans</b></a></li>
		        <li><a href="healthTips"><b>Health Tips</b></a></li>
		        <li><a href="contact"><b>Contact Us</b></a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		    
		        <li><a href="login" class="btn btn-primary btn-lg">Login</a></li>
		   
	            <li><a href="#" class="btn btn-success"><b>عربي</b></a></li>
			  </ul>
		    </div>
	    </div>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}" />
<script>
	$('.nav li').click(function () {
		// alert('df');
    	// $('.nav li').not(this).removeClass('active');
	    // $(this).addClass('active');
	});
</script>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>