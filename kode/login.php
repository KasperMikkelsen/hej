<?php
	//Connecting to database.
    include "connectDB.php";

//If we press login it will put our user input of username and password into variables

if(isset($_POST['login'])) {
    
	$id = $_POST["username"];
	$pw = $_POST["password"];

	//The query looks for the user input of username in our database and matches is it with our hashed password.

    $query = "SELECT * FROM login WHERE username = '$id'";
    $res = mysqli_query($con, $query);
    $row = $res->fetch_assoc();

    $dbPassword = $row['password'];

    //If the user input matches database password it will succeed.
    if(password_verify($pw, $dbPassword)) {
    	//Begins our session cookie.
    	session_start();
    	//Makes the username and password into session variables.
    	$_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];

        //Redirect us to our profile page.
        header("Location: profile.php");	

    }
    else {
    	//Alerts the user if the username and password does not match.
        $message = "Wrong username or password.";
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
	<!-- div that contains our login form -->
<div class="whatever">
	<!-- The login form -->
	<form method="post" name="signUpForm">
		<h2>Login</h2>
		<label>Username:</label>
		<br>
		<input type="text" name="username" placeholder="Username">
		<br><br>
		<label>Password:</label>
		<br>
		<input type="password" name="password" placeholder="Password">
		<br><br>
		<input type="submit" name="login" class="signup" value="Log in">
	</form>
</div>
<body>
</html>