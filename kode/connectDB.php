<?php

$host = "localhost";
$user = "root";
$pw = "";
$dbname = "db2";

$con = new mysqli($host, $user, $pw, $dbname);

if($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}

?>