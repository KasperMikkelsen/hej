
<?php

// connecting to database start
/* description
 $host: is where you put your host name in
 $user: this is the username for your database, if you haven't changed it the username will be root by default
 $pw: this is the password for your database, if you haven't changed it, there wont be a password so leave it blank unless you have changed it's password
 $dbname: this is the database here you type the name of your database you want to connect to, example or database name is db2



 */ 
$host = "localhost";
$user = "root";
$pw = "";
$dbname = "db2";

$con = new mysqli($host, $user, $pw, $dbname);

if($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
// connection to database end
?>