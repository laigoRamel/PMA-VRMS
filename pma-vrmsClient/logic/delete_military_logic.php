<?php 
	require_once('../classes/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		DeleteMilitaryData($_POST['military_dataId']);
		header('Location: ../');
	}
	
	function DeleteMilitaryData($id){
		global $database;
		$query = "DELETE FROM military_data WHERE military_dataId='$id'";
		$database->execute($query);
		$database->disconnect();
	}

?>