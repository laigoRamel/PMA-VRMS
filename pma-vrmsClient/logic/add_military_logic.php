<?php 
	require_once('../classes/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		AddMilitaryData($_POST['m_lastname'], $_POST['m_firstname'], $_POST['m_middlename'], $_POST['m_rank'], $_POST['m_svc'], 
			$_POST['m_afpsn'], $_POST['m_residenceAddress'], $_POST['m_residenceTelNo'], $_POST['m_emailAddress'], $_POST['m_mobileNo'],
			$_POST['m_designatedOffice'], $_POST['m_designatedOfficeTelNo'], $_POST['m_officeAddress'], $_POST['m_dateOfRetirement']);
		header('Location: ../');
	}
	
	function AddMilitaryData($m_lastname, $m_firstname, $m_middlename, $m_rank, $m_svc, $m_afpsn, $m_residenceAddress, $m_residenceTelNo, $m_emailAddress, $m_mobileNo, $m_designatedOffice, $m_designatedOfficeTelNo, $m_officeAddress, $m_dateOfRetirement){
		global $database;
		$query = "INSERT military_data (m_lastname, m_firstname, m_middlename, m_rank, m_svc, m_afpsn, m_residenceAddress, m_residenceTelNo, m_emailAddress, m_mobileNo, m_designatedOffice, m_designatedOfficeTelNo, m_officeAddress, m_dateOfRetirement) 
					VALUES ('$m_lastname', '$m_firstname', '$m_middlename', '$m_rank', '$m_svc', '$m_afpsn', '$m_residenceAddress', '$m_residenceTelNo', '$m_emailAddress', '$m_mobileNo', '$m_designatedOffice', '$m_designatedOfficeTelNo', '$m_officeAddress', '$m_dateOfRetirement')";
		$database->execute($query);
		$database->disconnect();
	}

?>