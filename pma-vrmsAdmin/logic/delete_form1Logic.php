<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		DeleteApplicantData($_POST['a_applicantId']);
		header('Location: ../registeredApplicant.php');
	}
	
	function DeleteApplicantData($id){
		global $database;
		$query = "DELETE FROM form1_applicantpd WHERE a_applicantId='$id'";
		$database->execute($query);
		$database->disconnect();
	}

?>