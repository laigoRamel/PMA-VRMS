<?php  
	require_once('db/database.php');

	$database = new Database();
	

//form1
	$query = 'SELECT * FROM form1_applicantpd ORDER BY a_dateRegistered DESC';
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$applicants = array();
	
	while($applicant = mysqli_fetch_array($rows)){
		$a_id 		= $applicant['a_applicantId'];
		$a_lastname 	= $applicant['a_lastname'];
		$a_firstname 	= $applicant['a_firstname'];
		$a_middlename 	= $applicant['a_middlename'];
		$a_address 	= $applicant['a_address'];
		$a_occupation 	= $applicant['a_occupation'];
		$a_officeAddress 	= $applicant['a_officeAddress'];
		$a_driversLicense 	= $applicant['a_driversLicense'];
		$a_dateRegistered 	= $applicant['a_dateRegistered'];
		$a_class 	= $applicant['a_class'];
		
		array_push($applicants, array('a_applicantId' => $a_id, 'a_lastname' => $a_lastname, 'a_firstname' => $a_firstname, 'a_middlename' => $a_middlename,
			'a_address' => $a_address, 'a_occupation' => $a_occupation, 'a_officeAddress' => $a_officeAddress, 'a_driversLicense' => $a_driversLicense,
			'a_dateRegistered' => $a_dateRegistered, 'a_class' => $a_class));
	}


//form2
	$query = 'SELECT * FROM form2_militarypd ORDER BY m_dateRegistered DESC';
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$militarys = array();
	
	while($military = mysqli_fetch_array($rows)){
		$m_id 		= $military['m_militaryId'];
		$m_lastname 	= $military['m_lastname'];
		$m_firstname 	= $military['m_firstname'];
		$m_middlename 	= $military['m_middlename'];
		$m_rank 	= $military['m_rank'];
		$m_brSvc 	= $military['m_brSvc'];
		$m_afpsn 	= $military['m_afpsn'];
		$m_residenceAddress 	= $military['m_residenceAddress'];
		$m_residenceTelNo 	= $military['m_residenceTelNo'];
		$m_emailAddress 	= $military['m_emailAddress'];
		$m_mobileNo 	= $military['m_mobileNo'];
		$m_designatedOffice 	= $military['m_designatedOffice'];
		$m_officeTelNo 	= $military['m_officeTelNo'];
		$m_officeAddress 	= $military['m_officeAddress'];
		$m_dateRegistered 	= $military['m_dateRegistered'];
		$m_class 	= $military['m_class'];
		
		array_push($militarys, array('m_militaryId' => $m_id, 'm_lastname' => $m_lastname, 'm_firstname' => $m_firstname, 'm_middlename' => $m_middlename,
			'm_rank' => $m_rank, 'm_brSvc' => $m_brSvc, 'm_afpsn' => $m_afpsn, 'm_residenceAddress' => $m_residenceAddress,
			'm_residenceTelNo' => $m_residenceTelNo, 'm_emailAddress' => $m_emailAddress, 'm_mobileNo' => $m_mobileNo, 'm_designatedOffice' => $m_designatedOffice, 'm_officeTelNo' => $m_officeTelNo, 'm_officeAddress' => $m_officeAddress, 'm_dateRegistered' => $m_dateRegistered, 'm_class' => $m_class));
	}

//applicant vehicle
	$query = "SELECT * FROM vehicle_information JOIN form1_applicantpd ON form1_applicantpd.a_vehicle_id = vehicle_information.vehicleId  WHERE form1_applicantpd.a_status='registered'  AND form1_applicantpd.a_renew_status = '1'";
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$vehicles = array();
	
	while($vehicle = mysqli_fetch_array($rows)){
		$id 		= $vehicle['vehicleId'];
		$wheels 	= $vehicle['wheels'];
		$vehicleMake 	= $vehicle['vehicleMake'];
		$plateNo 	= $vehicle['plateNo'];
		$yearModel 	= $vehicle['yearModel'];
		$color 	= $vehicle['color'];
		$motorNo 	= $vehicle['motorNo'];
		$chassisNo 	= $vehicle['chassisNo'];
		$stickerNo 	= $vehicle['stickerNo'];
		
		array_push($vehicles, array('vehicleId' => $id, 'wheels' => $wheels, 'vehicleMake' => $vehicleMake, 'plateNo' => $plateNo, 'yearModel' => $yearModel, 'color' => $color, 'motorNo' => $motorNo, 'chassisNo' => $chassisNo, 'stickerNo' => $stickerNo));
	}

//military vehicle
	$query1 = "SELECT form2_militarypd.*, vehicle_information.* FROM form2_militarypd JOIN vehicle_information ON form2_militarypd.m_vehicle_id=vehicle_information.vehicleId WHERE form2_militarypd.m_status='registered' AND form2_militarypd.m_renew_status = '1'";
	$database->execute($query1);

	$rows = $database->getResult();
	
	$vehicles = array();

	while($vehicle = mysqli_fetch_array($rows)){
		$id 		= $vehicle['vehicleId'];
		$wheels 	= $vehicle['wheels'];
		$vehicleMake 	= $vehicle['vehicleMake'];
		$plateNo 	= $vehicle['plateNo'];
		$yearModel 	= $vehicle['yearModel'];
		$color 	= $vehicle['color'];
		$motorNo 	= $vehicle['motorNo'];
		$chassisNo 	= $vehicle['chassisNo'];
		$stickerNo 	= $vehicle['stickerNo'];
		
		array_push($vehicles, array('vehicleId' => $id, 'wheels' => $wheels, 'vehicleMake' => $vehicleMake, 'plateNo' => $plateNo, 'yearModel' => $yearModel, 'color' => $color, 'motorNo' => $motorNo, 'chassisNo' => $chassisNo, 'stickerNo' => $stickerNo));
	}


//client_vehicle log
	$query = 'SELECT * FROM client_log';
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$logs = array();
	
	while($log = mysqli_fetch_array($rows)){
		$id 		= $log['tid'];
		$plateNum 	= $log['plateNum'];
		$owner 		= $log['owner'];
		$datein 	= $log['dateIn'];
		$timein 	= $log['timein'];
		$dateout 	= $log['dateOut'];
		$timeout 	= $log['timeout'];
		$type 		= $log['type'];
		$licenseNo 		= $log['licenseNo'];
		$details 		= $log['details'];
		
		array_push($logs, array('tid' => $id, 'plateNum' => $plateNum, 'owner' => $owner, 'dateIn' => $datein, 'timein' => $timein, 'dateOut' => $dateout, 'timeout' => $timeout, 'type' => $type, 'licenseNo' => $licenseNo, 'details' => $details));
	}


//client_userlog
	$query = 'SELECT * FROM client_userlog';
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$mplogs = array();
	
	while($mplog = mysqli_fetch_array($rows)){
		$id 		= $mplog['logid'];
		$username1 	= $mplog['username'];
		$datein1 	= $mplog['datein'];
		$timein1 	= $mplog['timein'];
		$dateout1 	= $mplog['dateout'];
		$timeout1 	= $mplog['timeout'];
		
		array_push($mplogs, array('logid' => $id, 'username' => $username1, 'datein' => $datein1, 'timein' => $timein1, 'dateout' => $dateout1, 'timeout' => $timeout1));
	}


//client_report
	$query = 'SELECT * FROM client_report';
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$reports = array();
	
	while($mplog = mysqli_fetch_array($rows)){
		$id 		= $mplog['rid'];
		$plateNum 	= $mplog['plateNum'];
		$owner 	= $mplog['owner'];
		$datein1 	= $mplog['datein'];
		$timein 	= $mplog['timein'];
		$violation 	= $mplog['violation'];
		$type 	= $mplog['type'];
		
		array_push($reports, array('rid' => $id, 'plateNum' => $plateNum, 'owner' => $owner, 'datein' => $datein1, 'timein' => $timein, 'violation' => $violation, 'type' => $type));
	}
?>