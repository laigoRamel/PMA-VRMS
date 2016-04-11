<?php  
	require_once('db/database.php');

	$database = new Database();
	

//applicant vehicle
	$query = "SELECT * FROM vehicle_information JOIN form1_applicantpd ON form1_applicantpd.a_vehicle_id = vehicle_information.vehicleId  WHERE form1_applicantpd.a_status='registered'  AND form1_applicantpd.a_renew_status = '1'";
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$vehicles = array();
	
	while($vehicle = mysqli_fetch_array($rows)){
		$id 		= $vehicle['vehicleId'];
		$owner 	= $vehicle['a_firstname'].' '.$vehicle['a_lastname'];
		$wheels 	= $vehicle['wheels'];
		$vehicleMake 	= $vehicle['vehicleMake'];
		$plateNo 	= $vehicle['plateNo'];
		$yearModel 	= $vehicle['yearModel'];
		$color 	= $vehicle['color'];
		$motorNo 	= $vehicle['motorNo'];
		$chassisNo 	= $vehicle['chassisNo'];
		$stickerNo 	= $vehicle['stickerNo'];
		
		array_push($vehicles, array('vehicleId' => $id, 'owner' => $owner, 'wheels' => $wheels, 'vehicleMake' => $vehicleMake, 'plateNo' => $plateNo, 'yearModel' => $yearModel, 'color' => $color, 'motorNo' => $motorNo, 'chassisNo' => $chassisNo, 'stickerNo' => $stickerNo));
	}


?>