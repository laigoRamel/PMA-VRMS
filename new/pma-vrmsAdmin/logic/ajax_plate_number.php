<?php
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();

	$query = "SELECT plateNo FROM vehicle_information WHERE flag='1'";
	$data = $database->execute($query);

	$result = [];
	while($row = mysqli_fetch_array($database->getResult())){
		array_push($result, $row);
	}

	echo json_encode($result);
?>