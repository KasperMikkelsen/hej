<?php

$host = "localhost";
$user = "root";
$pw = "";
$dbname = "";

$con = new mysqli($host, $user, $pw, $dbname);

if($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}

?>