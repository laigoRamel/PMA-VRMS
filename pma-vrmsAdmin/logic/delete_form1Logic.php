<?php 
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	
	if(isset($_POST)){
		$a_applicantId = $_POST['a_applicantId'];

		$query1 = "UPDATE form1_applicantpd SET flag='0' WHERE a_applicantId='$a_applicantId'";
		$database->execute($query1);

		foreach ($_POST['vehicleId'] as $key => $value) {
			$query2 = "UPDATE vehicle_information SET flag='0' WHERE vehicleId='$value'";
			$database->execute($query2);
		}
		
		$database->disconnect();

		header('Location: ../registeredApplicant.php');
	}

?>