<?php  
	require_once('db/database.php');

	$database = new Database();

	$query = "SELECT form2_militarypd.*, vehicle_information.* FROM form2_militarypd JOIN vehicle_information ON form2_militarypd.m_vehicle_id=vehicle_information.vehicleId WHERE form2_militarypd.m_status='registered' AND form2_militarypd.m_renew_status = '1' ORDER BY m_dateRegistered DESC";
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$militarys = array();
	
	while($military = mysqli_fetch_array($rows)){
		$m_id 					= $military['m_militaryId'];
		$m_profile 				= $military['m_profile'];
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
		
		$id 					= $military['vehicleId'];
		$wheels 				= $military['wheels'];
		$vehicleMake 			= $military['vehicleMake'];
		$plateNo 				= $military['plateNo'];
		$yearModel 				= $military['yearModel'];
		$color 					= $military['color'];
		$motorNo 				= $military['motorNo'];
		$chassisNo 				= $military['chassisNo'];
		$stickerNo 				= $military['stickerNo'];
		
		array_push($militarys, array('m_militaryId' => $m_id, 'm_profile' => $m_profile,  'm_lastname' => $m_lastname, 'm_firstname' => $m_firstname, 'm_middlename' => $m_middlename,
			'm_rank' => $m_rank, 'm_brSvc' => $m_brSvc, 'm_afpsn' => $m_afpsn, 'm_residenceAddress' => $m_residenceAddress,
			'm_residenceTelNo' => $m_residenceTelNo, 'm_emailAddress' => $m_emailAddress, 'm_mobileNo' => $m_mobileNo, 'm_designatedOffice' => $m_designatedOffice, 'm_officeTelNo' => $m_officeTelNo, 'm_officeAddress' => $m_officeAddress, 'm_retirementDate' => $m_retirementDate, 'm_class' => $m_class,
			'vehicleId' => $id, 'wheels' => $wheels, 'vehicleMake' => $vehicleMake, 'plateNo' => $plateNo, 
			'yearModel' => $yearModel, 'color' => $color, 'motorNo' => $motorNo, 
			'chassisNo' => $chassisNo, 'stickerNo' => $stickerNo));
	}

?>