<?php  
	require_once('db/database.php');

	$database = new Database();

	$query = "SELECT form1_applicantpd.*, vehicle_information.* FROM form1_applicantpd JOIN vehicle_information ON form1_applicantpd.a_vehicle_id=vehicle_information.vehicleId WHERE form1_applicantpd.a_status='pending'  AND form1_applicantpd.a_renew_status = '1' ORDER BY a_dateRegistered DESC";
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$applicants = array();
	
	while($applicant = mysqli_fetch_array($rows)){
		$a_id 				= $applicant['a_applicantId'];
		$a_profile	 		= $applicant['a_profile'];
		$a_lastname 		= $applicant['a_lastname'];
		$a_firstname 		= $applicant['a_firstname'];
		$a_middlename 		= $applicant['a_middlename'];
		$a_address 			= $applicant['a_address'];
		$a_occupation 		= $applicant['a_occupation'];
		$a_officeAddress 	= $applicant['a_officeAddress'];
		$a_driversLicense 	= $applicant['a_driversLicense'];
		$a_expirationDate 	= $applicant['a_expirationDate'];
		$a_class 			= $applicant['a_class'];
		
		$id 				= $applicant['vehicleId'];
		$vehicleMake 		= $applicant['vehicleMake'];
		$plateNo 			= $applicant['plateNo'];
		$yearModel 			= $applicant['yearModel'];
		$color 				= $applicant['color'];
		$motorNo 			= $applicant['motorNo'];
		$chassisNo 			= $applicant['chassisNo'];
		$stickerNo 			= $applicant['stickerNo'];
		
		array_push($applicants, array('a_applicantId' => $a_id, 'a_profile' => $a_profile, 'a_lastname' => $a_lastname, 'a_firstname' => $a_firstname, 'a_middlename' => $a_middlename,
			'a_address' => $a_address, 'a_occupation' => $a_occupation, 'a_officeAddress' => $a_officeAddress, 'a_driversLicense' => $a_driversLicense,
			'a_expirationDate' => $a_expirationDate, 'a_class' => $a_class,
			'vehicleId' => $id, 'vehicleMake' => $vehicleMake, 'plateNo' => $plateNo, 
			'yearModel' => $yearModel, 'color' => $color, 'motorNo' => $motorNo, 
			'chassisNo' => $chassisNo, 'stickerNo' => $stickerNo));

		date_default_timezone_set("Asia/Hong_Kong");

		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");

		$full_name = $a_lastname . ', ' . $a_firstname . ' ' . $a_middlename;

		$query2 = "INSERT INTO admin_logs (id, username, activity, curr_date, curr_time)
					VALUES ('', '$login_session', 'Registered: $full_name (from pending)', '$current_date', '$current_time')";

		$database->execute($query2);
	}

?>