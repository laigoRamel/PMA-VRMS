<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		DeleteApplicantData($_POST['a_applicantId'], $_POST['a_vehicle_id']);
		header('Location: ../registeredApplicant.php');
	}
	
	function DeleteApplicantData($id){
		global $database;
		$query = "DELETE form1_applicantpd.*, vehicle_information.* FROM form1_applicantpd JOIN vehicle_information ON form1_applicantpd.a_vehicle_id=vehicle_information.vehicleId WHERE form1_applicantpd.a_applicantId='$id' AND form1_applicantpd.a_vehicle_id='$id'";
		$database->execute($query);
		$database->disconnect();
	}

?>