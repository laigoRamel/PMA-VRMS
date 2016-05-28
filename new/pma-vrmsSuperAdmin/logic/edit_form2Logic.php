<?php
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	
	if(isset($_POST)){
		$m_lastname 			= $_POST['m_lastname'];
		$m_firstname 			= $_POST['m_firstname'];
		$m_middlename 			= $_POST['m_middlename'];
		$m_rank 				= $_POST['m_rank'];
		$m_brSvc 				= $_POST['m_brSvc'];
		$m_afpsn 				= $_POST['m_afpsn'];
		$m_residenceAddress 	= $_POST['m_residenceAddress'];
		$m_residenceTelNo 		= $_POST['m_residenceTelNo'];
		$m_emailAddress 		= $_POST['m_emailAddress'];
		$m_mobileNo 			= $_POST['m_mobileNo'];
		$m_designatedOffice 	= $_POST['m_designatedOffice'];
		$m_officeTelNo 			= $_POST['m_officeTelNo'];
		$m_officeAddress 		= $_POST['m_officeAddress'];
		$m_retirementDate 		= $_POST['m_retirementDate'];
		$m_class 				= $_POST['m_class'];
		$m_placeRegistered 		= $_POST['m_placeRegistered'];
		$id 					= $_POST['id'];
		$m_profile				= $_FILES['m_profile'];

		$old_img = "../img/profile/military/".$_POST['old_first_name'].'-'.$_POST['old_last_name'].'.png';
		if (file_exists($old_img)) {
		    unlink($old_img);
		}
		
		move_uploaded_file($m_profile['tmp_name'], "../img/profile/military/".$m_firstname.'-'.$m_lastname.'.png');
		$img_name = $m_firstname.'-'.$m_lastname.'.png';

		$query1 = "UPDATE form2_militarypd SET m_profile='$img_name', m_lastname='$m_lastname', m_firstname='$m_firstname', m_middlename='$m_middlename', m_rank='$m_rank',
					m_brSvc='$m_brSvc', m_afpsn='$m_afpsn', m_residenceAddress='$m_residenceAddress', m_residenceTelNo='$m_residenceTelNo',
					m_emailAddress='$m_emailAddress', m_mobileNo='$m_mobileNo', m_designatedOffice='$m_designatedOffice', m_officeTelNo='$m_officeTelNo', 
					m_officeAddress='$m_officeAddress', 
					m_retirementDate='$m_retirementDate', m_class='$m_class', m_placeRegistered='$m_placeRegistered' WHERE m_militaryId='$id'";
		$database->execute($query1);

		$query2 = "DELETE FROM vehicle_information WHERE driver_id='$id' AND driver_type='military'";
		$database->execute($query2);

		$wheels 		= $_POST['wheels'];
		$vehicleMake 	= $_POST['vehicleMake'];
		$plateNo 		= $_POST['plateNo'];
		$yearModel		= $_POST['yearModel'];
		$color 			= $_POST['color'];
		$motorNo 		= $_POST['motorNo'];
		$chassisNo 		= $_POST['chassisNo'];
		$stickerNo 		= $_POST['stickerNo'];


		foreach ($wheels as $key => $wheel) {
			$query3 = "INSERT INTO vehicle_information (wheels, vehicleMake, plateNo, yearModel, color, motorNo, chassisNo, stickerNo, driver_id, driver_type)
						VALUES('$wheel', '$vehicleMake[$key]', '$plateNo[$key]', '$yearModel[$key]', '$color[$key]', '$motorNo[$key]', '$chassisNo[$key]', '$stickerNo[$key]', '$id', 'military')";
			$database->execute($query3);
		}

		header('Location: ../registeredAFP.php');
	}


?>