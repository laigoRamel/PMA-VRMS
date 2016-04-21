<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		DeleteMilitaryData($_POST['m_militaryId'], $_POST['vehicleId']);
		header('Location: ../registeredAFP.php');

//		echo $_POST['m_militaryId'];
//echo $_POST['vehicleId'];
//exit();
	}
	
	function DeleteMilitaryData($m_id, $id){
		global $database;
		$query = "DELETE FROM form2_militarypd WHERE m_militaryId='$m_id'";
		$database->execute($query);
		$query1 = "DELETE FROM vehicle_information WHERE vehicleId='$id'";
		$database->execute($query1);

		$database->disconnect();
	}
?>