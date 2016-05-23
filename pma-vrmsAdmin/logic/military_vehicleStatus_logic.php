<?php  
	require_once('db/database.php');

	$database = new Database();

		$query = "SELECT * FROM vehicle_information JOIN form2_militarypd ON form2_militarypd.m_militaryId = vehicle_information.driver_id";
	$database->execute($query);
	
	$rows = $database->getResult();
	
	$vehicles = array();
	
	while($vehicle = mysqli_fetch_array($rows)){
		$name 				= $vehicle['m_lastname'].', '.$vehicle['m_firstname'].' '.$vehicle['m_middlename'];
		$id 		= $vehicle['vehicleId'];
		$wheels 	= $vehicle['wheels'];
		$vehicleMake 	= $vehicle['vehicleMake'];
		$plateNo 	= $vehicle['plateNo'];
		$yearModel 	= $vehicle['yearModel'];
		$color 	= $vehicle['color'];
		$motorNo 	= $vehicle['motorNo'];
		$chassisNo 	= $vehicle['chassisNo'];
		$stickerNo 	= $vehicle['stickerNo'];
		
		array_push($vehicles, array('vehicleId' => $id, 'name' => $name, 'wheels' => $wheels, 'vehicleMake' => $vehicleMake, 'plateNo' => $plateNo, 'yearModel' => $yearModel, 'color' => $color, 'motorNo' => $motorNo, 'chassisNo' => $chassisNo, 'stickerNo' => $stickerNo));
	}

?>