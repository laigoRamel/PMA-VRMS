<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		DeleteApplicantData($_POST['a_applicantId'], $_POST['vehicleId']);
		header('Location: ../registeredApplicant.php');
//echo $_POST['a_applicantId'];
//echo $_POST['vehicleId'];
//exit();
	}
	
	function DeleteApplicantData($a_id, $id){
		global $database;
		$query = "DELETE FROM form1_applicantpd WHERE a_applicantId='$a_id'";
		$database->execute($query);
		$query1 = "DELETE FROM vehicle_information WHERE vehicleId='$id'";
		$database->execute($query1);
		
		$database->disconnect();
	}

?>