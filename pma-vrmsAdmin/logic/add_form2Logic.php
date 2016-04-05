<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		AddForm2Data($_POST['m_lastname'], $_POST['m_firstname'], $_POST['m_middlename'], $_POST['m_rank'], $_POST['m_brSvc'], 
			$_POST['m_afpsn'], $_POST['m_residenceAddress'], $_POST['m_residenceTelNo'], $_POST['m_emailAddress'], $_POST['m_mobileNo'], 
			$_POST['m_designatedOffice'], $_POST['m_officeTelNo'], $_POST['m_officeAddress'], $_POST['m_retirementDate'], $_POST['m_class'], 
			$_POST['vehicleMake'], $_POST['plateNo'], $_POST['yearModel'], $_POST['color'], $_POST['motorNo'], $_POST['chassisNo'], $_POST['stickerNo']);
		header('Location: ../form2.php');
	}
	
	function AddForm2Data($m_lastname, $m_firstname, $m_middlename, $m_rank, $m_brSvc, $m_afpsn, $m_residenceAddress, $m_residenceTelNo, 
							$m_emailAddress, $m_mobileNo, $m_designatedOffice, $m_officeTelNo, $m_officeAddress, $m_retirementDate, $m_class, $vehicleMake, 
							$plateNo, $yearModel, $color, $motorNo, $chassisNo, $stickerNo){
		global $database;
		
//Add vehicle		
		for($i=0; $i<count($vehicleMake); $i++){		
			$query1 = "INSERT INTO vehicle_information (vehicleMake, plateNo, yearModel, color, motorNo, chassisNo, stickerNo) 
					VALUES ('$vehicleMake[$i]', '$plateNo[$i]', '$yearModel[$i]', '$color[$i]', '$motorNo[$i]', '$chassisNo[$i]', '$stickerNo[$i]')";
			$database->execute($query1);
		}
		
//Add militar
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
		
		$query = "INSERT INTO form2_militarypd (m_lastname, m_firstname, m_middlename, m_rank, m_brSvc, m_afpsn, m_residenceAddress, m_residenceTelNo, 
					m_emailAddress, m_mobileNo, m_designatedOffice, m_officeTelNo, m_officeAddress, m_retirementDate, m_class, m_submitted_requirements, m_status, m_vehicle_id) 
				VALUES ('$m_lastname', '$m_firstname', '$m_middlename', '$m_rank', '$m_brSvc', '$m_afpsn', '$m_residenceAddress', '$m_residenceTelNo', 
					'$m_emailAddress', '$m_mobileNo', '$m_designatedOffice', '$m_officeTelNo', '$m_officeAddress', '$m_retirementDate', '$m_class', '$all_requirements', '$status', '$vehicle_id')";
		
		$database->execute($query);
		$database->disconnect();
	}

?>