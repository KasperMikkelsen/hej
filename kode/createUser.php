<?php

	include "connectDB.php";

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Sign Up Page</title>
</head>
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
<header>

</header>
<!-- create user textboxes and button start -->
<!-- desription -->
<div class="whatever">
	<form method="post" name="signUpForm">
		<h2>Sign Up</h2>
		<label>Username:</label>
		<br>
		<input type="text" name="username" placeholder="Enter your Username">
		<br><br>
		<label>Password:</label>
		<br>
		<input type="password" name="password" placeholder="Enter your Password">
		<br><br>
		<label>Your full name:</label>
		<br>
		<input type="text" name="navn" placeholder="Enter your Name">
		<br><br>
		<label>Your age:</label>
		<br>
		<input type="text" name="alder" placeholder="Enter your Age">
		<br>
		<input type="submit" name="create" class="signup" value="Create">
	</form>
</div>
<!-- create user textboxes and button end -->
<body>
</html>