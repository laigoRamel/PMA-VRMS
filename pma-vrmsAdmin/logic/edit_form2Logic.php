<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		EditMilitaryData($_POST['m_lastname'], $_POST['m_firstname'], $_POST['m_middlename'], $_POST['m_rank'], $_POST['m_brSvc'], 
			$_POST['m_afpsn'], $_POST['m_residenceAddress'], $_POST['m_residenceTelNo'], $_POST['m_emailAddress'], $_POST['m_mobileNo'], 
			$_POST['m_designatedOffice'], $_POST['m_officeTelNo'], $_POST['m_officeAddress'], $_POST['m_retirementDate']);
		header('Location: ../registeredAFP.php');
	}
	
	function EditMilitaryData($m_lastname, $m_firstname, $m_middlename, $m_rank, $m_brSvc, $m_afpsn, $m_residenceAddress, $m_residenceTelNo, 
								$m_emailAddress, $m_mobileNo, $m_designatedOffice, $m_officeTelNo, $m_officeAddress, $m_retirementDate){
		global $database;
		$id = $_POST['m_militaryId'];
		
		$query = "UPDATE form2_militarypd SET m_lastname='$m_lastname', m_firstname='$m_firstname', m_middlename='$m_middlename', m_rank='$m_rank',
					m_brSvc='$m_brSvc', m_afpsn='$m_afpsn', m_residenceAddress='$m_residenceAddress', m_residenceTelNo='$m_residenceTelNo',
					m_emailAddress='$m_emailAddress', m_mobileNo='$m_mobileNo', m_designatedOffice='$m_designatedOffice', m_officeTelNo='$m_officeTelNo',
					m_officeAddress='$m_officeAddress', m_retirementDate='$m_retirementDate'
					WHERE m_militaryId='$id'";
		$database->execute($query);
		$database->disconnect();
	}

?>