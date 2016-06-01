<?php 
	require_once('../classes/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		DeleteApplicantData($_POST['personal_dataId']);
		header('Location: ../');
	}
	
	function DeleteApplicantData($id){
		global $database;
		$query = "DELETE FROM personal_data WHERE personal_dataId='$id'";
		$database->execute($query);
		$database->disconnect();
	}

?>