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
<body>
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