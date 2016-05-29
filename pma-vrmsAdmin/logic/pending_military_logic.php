<?php  
	require_once('db/database.php');

	$database = new Database();

	$query = "SELECT * FROM form2_militarypd WHERE form2_militarypd.m_status='pending' ORDER BY m_dateRegistered DESC";
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$militarys = array();
	
	while($military = mysqli_fetch_array($rows)){
		$m_id 					= $military['m_militaryId'];
		$m_profile	 			= $military['m_profile'];
		$m_lastname 			= $military['m_lastname'];
		$m_firstname 			= $military['m_firstname'];
		$m_middlename 			= $military['m_middlename'];
		$m_rank 				= $military['m_rank'];
		$m_brSvc 				= $military['m_brSvc'];
		$m_afpsn 				= $military['m_afpsn'];
		$m_residenceAddress 	= $military['m_residenceAddress'];
		$m_residenceTelNo 		= $military['m_residenceTelNo'];
		$m_emailAddress 		= $military['m_emailAddress'];
		$m_mobileNo 			= $military['m_mobileNo'];
		$m_designatedOffice 	= $military['m_designatedOffice'];
		$m_officeTelNo 			= $military['m_officeTelNo'];
		$m_officeAddress 		= $military['m_officeAddress'];
		$m_retirementDate 		= $military['m_retirementDate'];
		$m_class 				= $military['m_class'];
		$m_submitted_requirements = $military['m_submitted_requirements'];
		
		
		//var_dump($militarys);
		//exit();
		date_default_timezone_set("Asia/Hong_Kong");

		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");

		$full_name = $m_lastname . ', ' . $m_firstname . ' ' . $m_middlename;

		$query2 = "INSERT INTO admin_logs (id, username, activity, curr_date, curr_time)
					VALUES ('', '$login_session', 'Registered: $full_name (from pending AFP)', '$current_date', '$current_time')";

		$database->execute($query2);

		$vehicles = map_vehicles($m_id);

		array_push($militarys, array('m_militaryId' => $m_id, 'm_profile' => $m_profile, 'm_lastname' => $m_lastname, 'm_firstname' => $m_firstname, 'm_middlename' => $m_middlename,
			'm_rank' => $m_rank, 'm_brSvc' => $m_brSvc, 'm_afpsn' => $m_afpsn, 'm_residenceAddress' => $m_residenceAddress,
			'm_residenceTelNo' => $m_residenceTelNo, 'm_emailAddress' => $m_emailAddress, 'm_mobileNo' => $m_mobileNo, 'm_designatedOffice' => $m_designatedOffice, 'm_officeTelNo' => $m_officeTelNo, 'm_officeAddress' => $m_officeAddress, 'm_retirementDate' => $m_retirementDate, 'm_class' => $m_class,
			'm_submitted_requirements' => $m_submitted_requirements, 'vehicles' => $vehicles));

	}

	function map_vehicles($id){
		$database = new Database();
		$query = sprintf("SELECT * FROM vehicle_information WHERE driver_id='%s' AND driver_type = 'military'", $id);
		$database->execute($query);
		$rows = $database->getResult();

		$vehicles = array();

		while($vehicle = mysqli_fetch_array($rows)){
			array_push($vehicles, $vehicle);
		}

		return $vehicles;
	}

?>