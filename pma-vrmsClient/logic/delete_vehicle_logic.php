<?php 
	require_once('../classes/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		DeleteVehicleData($_POST['vehicle_dataId']);
		header('Location: ../');
	}
	
	function DeleteVehicleData($v_id){
		global $database;
		$query = "DELETE FROM vehicle_data WHERE vehicle_dataId='$v_id'";
		$database->execute($query);
		$database->disconnect();
	}

?>