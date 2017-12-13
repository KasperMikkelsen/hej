<?php
    include "connectDB.php";

if(isset($_POST['login'])) {
    
	$id = $_POST["username"];
	$pw = $_POST["password"];

    $query = "SELECT * FROM login WHERE username = '$id'";
    $res = mysqli_query($con, $query);
    $row = $res->fetch_assoc();

    $dbPassword = $row['password'];

    if(password_verify($pw, $dbPassword)) {
    	session_start();
    	$_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];

        $message = "You have succesfully logged in";
        echo "<script type='text/javascript'>alert('$message');</script>";

    }
    else {
        $message = "Wrong username or password";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login Page</title>
</head>
<body>
<div class="whatever">
	<form method="post" name="signUpForm">
		<h2>Login</h2>
		<label>Username:</label>
		<br>
		<input type="text" name="username" placeholder="Username">
		<br><br>
		<label>Password:</label>
		<br>
<<<<<<< HEAD
		<input type="password" name="password" placeholder="Password">
		<br><br>
		<input type="submit" name="login" class="signup" value="Login">
=======
		<input type="password" name="password" placeholder="Enter your Password">
		<!-- <br>
		<label>Your full name:</label>
		<br>
		<input type="text" name="navn" placeholder="Enter your Name">
		<br>
		<label>Your age:</label>
		<br>
		<input type="text" name="alder" placeholder="Enter your Age"> -->
		<br>
		<input type="submit" name="create" class="signup" value="Log in">
>>>>>>> 4cc2a4082015ba19c9906e881df7ec6593fb3061
	</form>
</div>
<body>
</html>