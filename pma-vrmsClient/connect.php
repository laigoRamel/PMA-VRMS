<?php
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="pma-vrms"; // Database name 
	//$tbl_name="equip"; // Table name 

	// Create connection
	$conn = mysqli_connect($host, $username, $password, $db_name);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

?>