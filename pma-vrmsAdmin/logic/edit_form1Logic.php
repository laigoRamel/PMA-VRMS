<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		EditApplicantData($_POST['a_profile'], $_POST['a_lastname'], $_POST['a_firstname'], $_POST['a_middlename'], $_POST['a_address'], $_POST['a_occupation'], $_POST['a_officeAddress'], $_POST['a_driversLicense'], $_POST['a_expirationDate'], $_POST['a_class'], $_POST['a_dateRegistered'], $_POST['a_placeRegistered'], $_POST['wheels'], $_POST['vehicleMake'], $_POST['plateNo'], $_POST['yearModel'], $_POST['color'], $_POST['motorNo'], $_POST['chassisNo'], $_POST['stickerNo'],);
		header('Location: ../registeredApplicant.php');
	}
	
	function EditApplicantData($a_profile, $a_lastname, $a_firstname, $a_middlename, $a_address, $a_occupation, $a_officeAddress, $a_driversLicense, $a_expirationDate, $a_class, $a_dateRegistered, $a_placeRegistered, $wheels, $vehicleMake, $plateNo, $yearModel, $color, $motorNo, $chassisNo, $stickerNo){
		global $database;
		$id = $_POST['a_applicantId'];

		$query = "UPDATE form1_applicantpd.*, vehicle_information.* FROM form1_applicantpd JOIN vehicle_information ON form1_applicantpd.a_vehicle_id=vehicle_information.vehicleId SET a_profile='$a_profile', a_lastname='$a_lastname', a_firstname='$a_firstname', a_middlename='$a_middlename', a_address='$a_address', a_occupation='$a_occupation', a_officeAddress='$a_officeAddress', a_driversLicense='$a_driversLicense', a_expirationDate='$a_expirationDate', a_class='$a_class', a_dateRegistered='$a_dateRegistered', a_placeRegistered='$a_placeRegistered', wheels='$wheels', vehicleMake='$vehicleMake', plateNo='$plateNo', yearModel='$yearModel', color='$color', motorNo='$motorNo', chassisNo='$chassisNo', stickerNo='$stickerNo' WHERE form1_applicantpd.a_applicantId='$a_id' AND form1_applicantpd.a_vehicle_id='$a_id'";
		$database->execute($query);

		date_default_timezone_set("Asia/Hong_Kong");

		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");

		//$full_name = $a_lastname . ', ' . $a_firstname . ' ' . $a_middlename;

		$full_name = $a_lastname . ', ' . $a_firstname . ' ' . $a_middlename;

		$query2 = "INSERT INTO admin_logs (id, user, activity, curr_date, curr_time)
					VALUES ('', '$username', 'Edited: $full_name', '$current_date', '$current_time')";

		$database->execute($query2);

		$database->disconnect();
	}

?>