<?php  
	require_once('db/database.php');

	$database = new Database();
 
		$query = "SELECT * FROM vehicle_information JOIN form1_applicantpd ON form1_applicantpd.a_applicantId = vehicle_information.driver_id WHERE driver_type='applicant' AND vehicle_information.flag='1' AND a_status='registered'";
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$vehicles = array();
	
	while($vehicle = mysqli_fetch_array($rows)){
		$name 				= $vehicle['a_lastname'].', '.$vehicle['a_firstname'].' '.$vehicle['a_middlename'];
		$id 		= $vehicle['vehicleId'];
		$wheels 	= $vehicle['wheels'];
		$vehicleMake 	= $vehicle['vehicleMake'];
		$plateNo 	= $vehicle['plateNo'];
		$yearModel 	= $vehicle['yearModel'];
		$color 	= $vehicle['color'];
		$motorNo 	= $vehicle['motorNo'];
		$chassisNo 	= $vehicle['chassisNo'];
		$stickerNo 	= $vehicle['stickerNo'];
		$status		= $vehicle['status'];
		array_push($vehicles, array('vehicleId' => $id, 'name' => $name, 'wheels' => $wheels, 'vehicleMake' => $vehicleMake, 'plateNo' => $plateNo, 'yearModel' => $yearModel, 'color' => $color, 'motorNo' => $motorNo, 'chassisNo' => $chassisNo, 'stickerNo' => $stickerNo, 'status' => $status));
	}

?>