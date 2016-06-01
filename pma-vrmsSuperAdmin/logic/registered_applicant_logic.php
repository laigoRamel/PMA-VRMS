<?php  
	require_once('db/database.php');

	$database = new Database();

	$query = "SELECT * FROM form1_applicantpd WHERE a_status='registered' AND form1_applicantpd.a_renew_status = '1' ORDER BY a_dateRegistered DESC";
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$applicants = array();

	
	while($applicant = mysqli_fetch_array($rows)){
		$a_id 				= $applicant['a_applicantId'];
		$a_profile 			= $applicant['a_profile'];
		$name 				= $applicant['a_lastname'].', '.$applicant['a_firstname'].' '.$applicant['a_middlename'];
//		$a_lastname 		= $applicant['a_lastname'];
//		$a_firstname 		= $applicant['a_firstname'];
//		$a_middlename 		= $applicant['a_middlename'];
		$a_address 			= $applicant['a_address'];
		$a_occupation 		= $applicant['a_occupation'];
		$a_officeAddress 	= $applicant['a_officeAddress'];
		$a_driversLicense 	= $applicant['a_driversLicense'];
		$a_expirationDate 	= $applicant['a_expirationDate'];
		$a_class 			= $applicant['a_class'];
		$a_dateRegistered 	= $applicant['a_dateRegistered'];
		$a_placeRegistered 	= $applicant['a_placeRegistered'];

		$vehicles = map_vehicles($a_id);
		
		array_push($applicants, array('a_applicantId' => $a_id, 'a_profile' => $a_profile, 'name' => $name, 'a_address' => $a_address, 'a_occupation' => $a_occupation, 'a_officeAddress' => $a_officeAddress, 'a_driversLicense' => $a_driversLicense, 'a_expirationDate' => $a_expirationDate, 'a_class' => $a_class, 'a_placeRegistered' => $a_placeRegistered, 'a_dateRegistered' => $a_dateRegistered, 'vehicles' => $vehicles));
	}

	function map_vehicles($id){
		$database = new Database();
		$query = sprintf("SELECT * FROM vehicle_information WHERE driver_id='%s' AND driver_type = 'applicant'", $id);
		$database->execute($query);
		$rows = $database->getResult();

		$vehicles = array();

		while($vehicle = mysqli_fetch_array($rows)){
			array_push($vehicles, $vehicle);
		}

		return $vehicles;
	}

?>