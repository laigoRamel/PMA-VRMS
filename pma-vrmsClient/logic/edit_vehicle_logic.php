<?php 
	require_once('../classes/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		EditVehicleData($_POST['vehicle_make'], $_POST['plate_no'], $_POST['year_model'], $_POST['color'], $_POST['motor_no'], 
			$_POST['chassis_no'], $_POST['sticker_no']);
		header('Location: ../');
	}
	
	function EditVehicleData($vehicle_make, $plate_no, $year_model, $color, $motor_no, $chassis_no, $sticker_no){
		global $database;
		$v_id = $_POST['vehicle_dataId'];
		
		$query = "UPDATE vehicle_data SET vehicle_make='$vehicle_make', plate_no='$plate_no', year_model='$year_model', color='$color',
					motor_no='$motor_no', chassis_no='$chassis_no', sticker_no='$sticker_no'
					WHERE vehicle_dataId='$v_id'";
		$database->execute($query);
		$database->disconnect();
	}

?>