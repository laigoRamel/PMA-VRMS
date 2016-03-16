<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		AddForm1Data($_POST['a_lastname'], $_POST['a_firstname'], $_POST['a_middlename'], $_POST['a_address'], $_POST['a_occupation'], 
			$_POST['a_officeAddress'], $_POST['a_driversLicense'], $_POST['a_expirationDate'], $_POST['a_class'], $_POST['vehicleMake'], $_POST['plateNo'], $_POST['yearModel'], $_POST['color'], $_POST['motorNo'], $_POST['chassisNo'], $_POST['stickerNo']);
		header('Location: ../');
	}
	
	function AddForm1Data($a_lastname, $a_firstname, $a_middlename, $a_address, $a_occupation, $a_officeAddress, $a_driversLicense, $a_expirationDate, $a_class, $vehicleMake, $plateNo, $yearModel, $color, $motorNo, $chassisNo, $stickerNo){
		global $database;

//Add vehicle		
		$query1 = "INSERT INTO vehicle_information (vehicleMake, plateNo, yearModel, color, motorNo, chassisNo, stickerNo) 
				VALUES ('$vehicleMake', '$plateNo', '$yearModel', '$color', '$motorNo', '$chassisNo', '$stickerNo')";
		$database->execute($query1);
		
//Add applicant	
		$query_vehicle = "SELECT vehicleId FROM vehicle_information ORDER BY vehicleId DESC LIMIT 1"; 
		$database->execute($query_vehicle);
		$rows = $database->getResult();
		$result = mysqli_fetch_array($rows);
		$vehicle_id = $result['vehicleId']; // vehicle id
		
		$requirements = $_POST['requirements'];
		$status = (count($requirements) === 5) ? 'registered' : 'pending'; //status
		
		$all_requirements = ''; //all submitted requirements
		foreach($requirements as $requirement){
			$all_requirements = $requirement.','.$all_requirements;
		}
		
	
		$query = "INSERT INTO form1_applicantpd (a_lastname, a_firstname, a_middlename, a_address, a_occupation, a_officeAddress, a_driversLicense, a_expirationDate, a_class, a_submitted_requirements, a_status, a_vehicle_id) 
				VALUES ('$a_lastname', '$a_firstname', '$a_middlename', '$a_address', '$a_occupation', '$a_officeAddress', '$a_driversLicense', '$a_expirationDate', '$a_class', '$all_requirements', '$status', '$vehicle_id')";

		$database->execute($query);
		$database->disconnect();
	}

?>