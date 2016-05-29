<?php
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();

	$query = "SELECT * FROM form1_applicantpd WHERE flag=1";

	$database->execute($query);

	$result = [];
	while($row = mysqli_fetch_array($database->getResult())){
		array_push($result, $row);
	}

	echo json_encode($result);

?>