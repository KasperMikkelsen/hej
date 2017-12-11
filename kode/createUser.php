<?php

	include "connectDB.php";

?>
<html>
<body>
	<?php
	if(isset($_POST["create"])) {
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
		<br>
		<input type="text" name="username" placeholder="Enter your Username">
		<br>
		<label>Password:</label>
		<br>
		<input type="password" name="password" placeholder="Enter your Password">
		<br>
		<label>Your full name:</label>
		<br>
		<input type="text" name="navn" placeholder="Enter your Name">
		<br>
		<label>Your age:</label>
		<br>
		<input type="text" name="alder" placeholder="Enter your Age">
		<br>
		<input type="submit" name="create" value="Create">
	</form>
<body>
</html>