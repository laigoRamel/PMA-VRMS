<?php 
	require_once('../classes/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		AddVehicleData($_POST['vehicle_make'], $_POST['plate_no'], $_POST['year_model'], $_POST['color'], $_POST['motor_no'], 
			$_POST['chassis_no'], $_POST['sticker_no']);
		header('Location: ../');
	}
	
	function AddVehicleData($vehicle_make, $plate_no, $year_model, $color, $motor_no, $chassis_no, $sticker_no){
		global $database;
		$query = "INSERT vehicle_data (vehicle_make, plate_no, year_model, color, motor_no, chassis_no, sticker_no) 
					VALUES ('$vehicle_make', '$plate_no', '$year_model', '$color', '$motor_no', '$chassis_no', '$sticker_no')";
		$database->execute($query);
		$database->disconnect();
	}

?>