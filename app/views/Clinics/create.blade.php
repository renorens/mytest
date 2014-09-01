<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Doctor Admin</title>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
	 <form name="create_clinic" action="store" method="POST">
	 	<label for="name">Name</label>
	 	<input name="name" id="name" type="text">
	 	<br/>
	 	<label for="description">Description</label>
	 	<textarea rows="4" cols="50" name="description" id="description" type="textarea">
	 	</textarea>
	 	<br/>
	 	<label for="category">Category</label>
	 	<select>
		  <option value="public_doctor">Public Doctor</option>
		  <option value="women_doctor">Women Specialist</option>
		  <option value="heart_doctor">Heart Specialist</option>
		  <option value="vision_doctor">Vision Specialist</option>
		</select>
		<br/>
		<label for="city">City</label>
	 	<input name="city" id="city" type="text">
	 	<br/>
		<label for="address">Address</label>
	 	<input name="address" id="address" type="text">
	 	<br/>
		<label for="phone">Phone</label>
	 	<input name="phone" id="phone" type="text">
	 	<br/><br/>
	 	<input type="submit" value="submit"/>

	 </form>
</body>
</html>
