<?php 
	require_once('../db/database.php');
	$database = new Database();

	$applicantId = $_POST['applicantId'];
	$requirements = $_POST['requirements'];
	$status = (count($requirements) === 5) ? 'registered' : 'pending'; //status
	$a_renew_status = (count($requirements) === 5) ? '1' : '0'; //status
	$amount = (count($requirements) === 5) ? 250 : 0; //status

	$all_requirements = ''; //all submitted requirements
	foreach($requirements as $requirement){
		$all_requirements = $requirement.','.$all_requirements;
	}

	$query = sprintf("UPDATE form1_applicantpd SET a_status='%s', a_renew_status='%s', a_submitted_requirements='%s', amount='%s' WHERE a_applicantId='%s'", $status, $a_renew_status, $all_requirements, $amount, $applicantId);
	
	$database->execute($query);
	$database->disconnect();

	header('Location: ../pendingApplicant.php');
	exit();
?>