<?php 
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	
	if(isset($_POST)){
		$m_militaryId = $_POST['m_militaryId'];

		$query1 = "UPDATE form2_militarypd SET flag='0' WHERE m_militaryId='$m_militaryId'";
		$database->execute($query1);

		foreach ($_POST['vehicleId'] as $key => $value) {
			$query2 = "UPDATE vehicle_information SET flag='0' WHERE vehicleId='$value'";
			$database->execute($query2);
		}
		
		$database->disconnect();

		header('Location: ../registeredAFP.php');
	}
?>