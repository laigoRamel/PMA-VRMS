<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		EditApplicantData($_POST['a_lastname'], $_POST['a_firstname'], $_POST['a_middlename'], $_POST['a_address'], $_POST['a_occupation'], 
			$_POST['a_officeAddress'], $_POST['a_driversLicense'], $_POST['a_expirationDate']);
		header('Location: ../registeredApplicant.php');
	}
	
	function EditApplicantData($a_lastname, $a_firstname, $a_middlename, $a_address, $a_occupation, $a_officeAddress, $a_driversLicense, $a_expirationDate){
		global $database;
		$id = $_POST['a_applicantId'];
		
		$query = "UPDATE form1_applicantpd SET a_lastname='$a_lastname', a_firstname='$a_firstname', a_middlename='$a_middlename', a_address='$a_address', a_occupation='$a_occupation', a_officeAddress='$a_officeAddress', a_driversLicense='$a_driversLicense', a_expirationDate='$a_expirationDate'
					WHERE a_applicantId='$id'";
		$database->execute($query);
		$database->disconnect();
	}

?>