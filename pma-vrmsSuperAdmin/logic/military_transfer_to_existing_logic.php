<?php
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	$id = $_POST['vehicleId'];
	$driver_id = $_POST['driver_id'];

	$query = "UPDATE vehicle_information SET driver_id='$driver_id' WHERE vehicleId='$id'";
	$database->execute($query);
	$database->disconnect();

	header('Location: ../military_vehicles.php');

?>