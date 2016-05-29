<?php  
	require_once('../db/database.php');

	$database = new Database();

	if(isset($_POST)){
		$id = $_POST['id'];
		$status = $_POST['status'];

		$query = "UPDATE vehicle_information SET status='$status' WHERE vehicleId='$id'";
		$database->execute($query);
		$database->disconnect();
	
	}
?>