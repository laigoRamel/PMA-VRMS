<?php
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	
//	$name = $a_lastname.$a_firstname.$a_middlename;
	
	if(isset($_POST)){
//		$a_firstname = $_POST['a_firstname'];
//		$a_middlename = $_POST['a_middlename'];
//		$a_lastname = $_POST['a_lastname'];
//		$name = $a_lastname.$a_firstname.$a_middlename;

//		EditApplicantData($_FILES['a_profile'], $_POST['name'], $_POST['a_address'], $_POST['a_occupation'], $_POST['a_officeAddress'], $_POST['a_driversLicense'], $_POST['a_expirationDate'], $_POST['a_class'], $_POST['a_placeRegistered'], $_POST['wheels'], $_POST['vehicleMake'], $_POST['plateNo'], $_POST['yearModel'], $_POST['color'], $_POST['motorNo'], $_POST['chassisNo'], $_POST['stickerNo']);
		header('Location: ../registeredApplicant.php');
//echo $_POST['a_applicantId'];
//echo $_POST['vehicleId'];
//exit();
	}
/*	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	
//	$name = $a_lastname.$a_firstname.$a_middlename;
	
	if(isset($_POST)){
		$a_firstname = $_POST['a_firstname'];
		$a_middlename = $_POST['a_middlename'];
		$a_lastname = $_POST['a_lastname'];
		$name = $a_lastname.$a_firstname.$a_middlename;

		EditApplicantData($_FILES['a_profile'], $_POST['name'], $_POST['a_address'], $_POST['a_occupation'], $_POST['a_officeAddress'], $_POST['a_driversLicense'], $_POST['a_expirationDate'], $_POST['a_class'], $_POST['a_placeRegistered'], $_POST['wheels'], $_POST['vehicleMake'], $_POST['plateNo'], $_POST['yearModel'], $_POST['color'], $_POST['motorNo'], $_POST['chassisNo'], $_POST['stickerNo']);
		header('Location: ../registeredApplicant.php');
//echo $_POST['a_applicantId'];
//echo $_POST['vehicleId'];
//exit();
	}

	function EditApplicantData($a_profile, $name, $a_address, $a_occupation, $a_officeAddress, $a_driversLicense, $a_expirationDate, $a_class, $a_placeRegistered, $wheels, $vehicleMake, $plateNo, $yearModel, $color, $motorNo, $chassisNo, $stickerNo){
		global $database;
		$a_id = $_POST['a_applicantId'];
		$id = $_POST['vehicleId'];

		$a_dateRegistered = date('Y-m-d H:i:s');
//update applicant
		$query = "UPDATE form1_applicantpd SET a_profile='$a_profile', name='$name', a_address='$a_address', a_occupation='$a_occupation', a_officeAddress='$a_officeAddress', a_driversLicense='$a_driversLicense', a_expirationDate='$a_expirationDate', a_class='$a_class', a_dateRegistered='$a_dateRegistered', a_placeRegistered='$a_placeRegistered' WHERE a_applicantId='$a_id'";
		$database->execute($query);
//update vehicle
		$query1 = "UPDATE vehicle_information SET wheels='$wheels', vehicleMake='$vehicleMake', plateNo='$plateNo', yearModel='$yearModel', color='$color', motorNo='$motorNo', chassisNo='$chassisNo', stickerNo='$stickerNo' WHERE vehicleId='$id'";
		$database->execute($query1);

		date_default_timezone_set("Asia/Hong_Kong");

		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");
		$username = $_SESSION['getUser'];

		//$full_name = $a_lastname . ', ' . $a_firstname . ' ' . $a_middlename;

		$full_name = $a_lastname . ', ' . $a_firstname . ' ' . $a_middlename;

		$query2 = "INSERT INTO admin_logs (id, username, activity, curr_date, curr_time)
					VALUES ('', '$username', 'Edited: $full_name', '$current_date', '$current_time')";

		$database->execute($query2);

		$database->disconnect();
	}*/

?>