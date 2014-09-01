<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Doctor Admin</title>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
	 <fieldset>
	 	<ul>
	 		<br/><br/>
	 		@foreach ($clinics as $clinic)
			    <p>This is clinic {{ $clinic->id }}</p>
			@endforeach
	 	</ul>
	 </fieldset>
</body>
</html>
