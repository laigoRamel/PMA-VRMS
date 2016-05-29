<?php 
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	
	if(isset($_POST)){
		DeleteApplicantData($_POST['a_applicantId'], $_POST['vehicleId']);
		header('Location: ../registeredApplicant.php');
//echo $_POST['a_applicantId'];
//echo $_POST['vehicleId'];
//exit();
	}
	
	function DeleteApplicantData($a_id, $id){
		global $database;

		date_default_timezone_set("Asia/Hong_Kong");

		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");
		$username = $_SESSION['getUser'];

		//$full_name = $a_lastname . ', ' . $a_firstname . ' ' . $a_middlename;

		$query2 = "INSERT INTO admin_logs (id, username, activity, curr_date, curr_time)
					VALUES ('', '$username', 'Deleted: ', '$current_date', '$current_time')";

		$database->execute($query2);

		$query = "DELETE FROM form1_applicantpd WHERE a_applicantId='$a_id'";
		$database->execute($query);
		$query1 = "DELETE FROM vehicle_information WHERE vehicleId='$id'";
		$database->execute($query1);

		
		
		$database->disconnect();
	}

?>