<?php 
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	
	if(isset($_POST)){
		EditMilitaryData($_POST['m_profile'], $_POST['name'], $_POST['m_rank'], $_POST['m_brSvc'], $_POST['m_afpsn'], $_POST['m_residenceAddress'], $_POST['m_residenceTelNo'], $_POST['m_emailAddress'], $_POST['m_mobileNo'], $_POST['m_designatedOffice'], $_POST['m_officeTelNo'], $_POST['m_officeAddress'], $_POST['m_retirementDate'], $_POST['m_class'], $_POST['m_dateRegistered'], $_POST['m_placeRegistered'], $_POST['wheels'], $_POST['vehicleMake'], $_POST['plateNo'], $_POST['yearModel'], $_POST['color'], $_POST['motorNo'], $_POST['chassisNo'], $_POST['stickerNo']);
		header('Location: ../registeredAFP.php');
	}
	
	function EditMilitaryData($m_profile, $name, $m_rank, $m_brSvc, $m_afpsn, $m_residenceAddress, $m_residenceTelNo, $m_emailAddress, $m_mobileNo, $m_designatedOffice, $m_officeTelNo, $m_officeAddress, $m_retirementDate, $m_class, $m_dateRegistered, $m_placeRegistered, $wheels, $vehicleMake, $plateNo, $yearModel, $color, $motorNo, $chassisNo, $stickerNo){
		global $database;
		$m_id = $_POST['m_militaryId'];
		$id = $_POST['m_militaryId'];
		//update military data
		$query = "UPDATE form2_militarypd SET m_profile='$m_profile', name='$name', m_rank='$m_rank', m_brSvc='$m_brSvc', m_afpsn='$m_afpsn', m_residenceAddress='$m_residenceAddress', m_residenceTelNo='$m_residenceTelNo', m_emailAddress='$m_emailAddress', m_mobileNo='$m_mobileNo', m_designatedOffice='$m_designatedOffice', m_officeTelNo='$m_officeTelNo', m_officeAddress='$m_officeAddress', m_retirementDate='$m_retirementDate', m_class='$m_class', m_dateRegistered='$m_dateRegistered', m_placeRegistered='$m_placeRegistered' WHERE m_militaryId='$m_id'";
		$database->execute($query);
		//update vehicle data
		$query = "UPDATE vehicle_information SET wheels='$wheels', vehicleMake='$vehicleMake', plateNo='$plateNo', yearModel='$yearModel', color='$color', motorNo='$motorNo', chassisNo='$chassisNo', stickerNo='$stickerNo' WHERE vehicleId='$id'";
		$database->execute($query);

		date_default_timezone_set("Asia/Hong_Kong");

		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");
		$username = $_SESSION['getUser'];

		//$full_name = $a_lastname . ', ' . $a_firstname . ' ' . $a_middlename;

		$full_name = $m_lastname . ', ' . $m_firstname . ' ' . $m_middlename;

		$query2 = "INSERT INTO admin_logs (id, username, activity, curr_date, curr_time)
					VALUES ('', '$username', 'Edited: $full_name (AFP)', '$current_date', '$current_time')";

		$database->execute($query2);

		$database->disconnect();
	}

?>