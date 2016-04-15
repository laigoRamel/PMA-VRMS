<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		DeleteMilitaryData($_POST['m_militaryId']);
		header('Location: ../registeredAFP.php');
	}
	
	function DeleteMilitaryData($id){
		global $database;
		$query = "DELETE form2_militarypd.*, vehicle_information.* FROM form2_militarypd JOIN vehicle_information ON form2_militarypd.m_vehicle_id=vehicle_information.vehicleId WHERE form2_militarypd.m_vehicle_id='$id' AND vehicle_information.vehicleId='$id'";
		$database->execute($query);
		$database->disconnect();
	}

?>