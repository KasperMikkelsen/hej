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

        header("Location: loggedIn.php");
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
	<form method="post">
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
		<input type="submit" name="create" class="signup" value="Create">
	</form>
</div>
<body>
</html>