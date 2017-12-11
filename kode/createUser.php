<?php

	include 'connectDB';

?>
<html
<body>
	<?php
	if(isset($_POST["submit"])) {
		$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
		$sql = "INSERT INTO user (username, password, navn, alder)
		VALUES ('".$_POST["username"]."' , '".$hash."' , '".$_POST["navn"]."' , '".$_POST["alder"]."')";

		
	}


	?>
	<form>
		<label>Username:</label>
		<input type="text" name="username">
		<br>
		<label>Password:</label>
		<input type="password" name="password">
		<br>
		<label>Your full name:</label>
		<input type="text" name="navn">
		<br>
		<label>Your age:</label>
		<input type="text" name="alder">
		<br>
		<input type="submit" name="create" value="Create">
	</form>
<body>
</html>