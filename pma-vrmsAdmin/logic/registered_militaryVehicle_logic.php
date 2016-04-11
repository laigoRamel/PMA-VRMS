<?php  
	require_once('db/database.php');

	$database = new Database();
	
//military vehicle
	$query1 = "SELECT form2_militarypd.*, vehicle_information.* FROM form2_militarypd JOIN vehicle_information ON form2_militarypd.m_vehicle_id=vehicle_information.vehicleId WHERE form2_militarypd.m_status='registered' AND form2_militarypd.m_renew_status = '1'";
	$database->execute($query1);

	$rows = $database->getResult();
	
	$vehicles = array();

	while($vehicle = mysqli_fetch_array($rows)){
		$id 		= $vehicle['vehicleId'];
		$owner 	= $vehicle['m_firstname'].' '.$vehicle['m_lastname'];
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