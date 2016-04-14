<?php  
	require_once('db/database.php');

	$database = new Database();

	$query = "SELECT form1_applicantpd.*, vehicle_information.* FROM form1_applicantpd JOIN vehicle_information ON form1_applicantpd.a_vehicle_id=vehicle_information.vehicleId WHERE form1_applicantpd.a_status='registered' AND form1_applicantpd.a_renew_status = '1' ORDER BY a_dateRegistered DESC";
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$applicants = array();
	
	while($applicant = mysqli_fetch_array($rows)){
		$a_id 				= $applicant['a_applicantId'];
		$a_profile 			= $applicant['a_profile'];
		$name 				= $applicant['a_lastname'].', '.$applicant['a_firstname'].' '.$applicant['a_middlename'];
		$a_address 			= $applicant['a_address'];
		$a_occupation 		= $applicant['a_occupation'];
		$a_officeAddress 	= $applicant['a_officeAddress'];
		$a_driversLicense 	= $applicant['a_driversLicense'];
		$a_expirationDate 	= $applicant['a_expirationDate'];
		$a_class 			= $applicant['a_class'];
		$a_dateRegistered 	= $applicant['a_dateRegistered'];
		$a_placeRegistered 	= $applicant['a_placeRegistered'];
		
		$id 				= $applicant['vehicleId'];
		$wheels 			= $applicant['wheels'];
		$vehicleMake 		= $applicant['vehicleMake'];
		$plateNo 			= $applicant['plateNo'];
		$yearModel 			= $applicant['yearModel'];
		$color 				= $applicant['color'];
		$motorNo 			= $applicant['motorNo'];
		$chassisNo 			= $applicant['chassisNo'];
		$stickerNo 			= $applicant['stickerNo'];
		
		array_push($applicants, array('a_applicantId' => $a_id, 'a_profile' => $a_profile, 'name' => $name,  'a_address' => $a_address, 'a_occupation' => $a_occupation, 'a_officeAddress' => $a_officeAddress, 'a_driversLicense' => $a_driversLicense, 'a_expirationDate' => $a_expirationDate, 'a_class' => $a_class, 'a_placeRegistered' => $a_placeRegistered, 'a_dateRegistered' => $a_dateRegistered,
			'vehicleId' => $id, 'wheels' => $wheels, 'vehicleMake' => $vehicleMake, 'plateNo' => $plateNo, 
			'yearModel' => $yearModel, 'color' => $color, 'motorNo' => $motorNo, 
			'chassisNo' => $chassisNo, 'stickerNo' => $stickerNo));
	}

?>