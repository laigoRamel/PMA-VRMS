<?php 
	require_once('../db/database.php');
	$database = new Database();

	$m_militaryId = $_POST['m_militaryId'];
	$requirements = $_POST['requirements'];
	$status = (count($requirements) === 6) ? 'registered' : 'pending'; //status
	$m_renew_status = (count($requirements) === 6) ? '1' : '0'; //status
	$amount = (count($requirements) === 6) ? 350 : 0; //status

	$all_requirements = ''; //all submitted requirements
	foreach($requirements as $requirement){
		$all_requirements = $requirement.','.$all_requirements;
	}

	$query = sprintf("UPDATE form2_militarypd SET m_status='%s', m_renew_status='%s', m_submitted_requirements='%s', amount='%s' WHERE m_militaryId='%s'", $status, $m_renew_status, $all_requirements, $amount, $m_militaryId);
	
	$database->execute($query);
	$vehicleId = $_POST['vehicleId'];
	$decalNo = $_POST['decalNo'];

	foreach ($vehicleId as $key => $value) {
		$query = "UPDATE vehicle_information SET decalNo='$decalNo[$key]' WHERE vehicleId='$value'";
		$database->execute($query);
	}
	$database->disconnect();

	header('Location: ../pendingMilitary.php');
	exit();
?>