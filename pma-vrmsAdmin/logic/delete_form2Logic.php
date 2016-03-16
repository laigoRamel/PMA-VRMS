<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		DeleteMilitaryData($_POST['m_militaryId']);
		header('Location: ../registeredAFP.php');
	}
	
	function DeleteMilitaryData($id){
		global $database;
		$query = "DELETE FROM form2_militarypd WHERE m_militaryId='$id'";
		$database->execute($query);
		$database->disconnect();
	}

?>