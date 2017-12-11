<?php

	include 'connectDB';

?>
<html>
<head>
	<title></title>
</head>
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
</body>
</html>
