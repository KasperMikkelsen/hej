<?php
//Continues our session.
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Profile</title>
</head>
<body>
	<!-- Writes welcome to the current user logged in. -->
	<header><h1><?php echo "Welcome: " . $_SESSION["username"]; ?></h1></header>

<p>stuff about the person</p>

</body>
</html>