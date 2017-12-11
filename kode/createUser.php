<?php

	include 'connectDB';

?>
<html
<body>
	<?php
	if(isset($_POST["submit"])) {
		$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
		$sql = "INSERT INTO login (username, password, navn, alder)
		VALUES ('".$_POST["username"]."' , '".$hash."' , '".$_POST["navn"]."' , '".$_POST["alder"]."')";

		$query = "SELECT * FROM login WHERE username = '".$_POST["username"]."'";
		$res = mysqli_query($con, $query);
		$rows = mysqli_num_rows($res);
		if ($rows>=1) 
		{	
			$message = "User exists, please choose another";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} 
		else
		{
			$con->query($sql);
			header("Location: login.php");
		}

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