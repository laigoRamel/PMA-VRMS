<?php
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	

	if(isset($_POST)){
		$a_lastname 		= $_POST['a_lastname']; 
		$a_firstname 		= $_POST['a_firstname']; 
		$a_middlename 		= $_POST['a_middlename'];
		$a_address 			= $_POST['a_address'];
		$a_occupation 		= $_POST['a_occupation'];
		$a_officeAddress 	= $_POST['a_officeAddress'];
		$a_driversLicense 	= $_POST['a_driversLicense'];
		$a_expirationDate 	= $_POST['a_expirationDate'];
		$a_class 			= $_POST['a_class'];
		$a_placeRegistered 	= $_POST['a_placeRegistered'];
		$id 				= $_POST['id'];
		$a_profile			= $_FILES['a_profile'];


		 if ($_FILES['a_profile']['name'] == true){
			$old_img = "../img/profile/applicant/".$_POST['old_first_name'].'-'.$_POST['old_last_name'].'.png';
			if (file_exists($old_img)) {
			    unlink($old_img);
			}
			
			move_uploaded_file($a_profile['tmp_name'], "../img/profile/applicant/".$a_firstname.'-'.$a_lastname.'.png');
			$img_name = $a_firstname.'-'.$a_lastname.'.png';

			$query1 = "UPDATE form1_applicantpd SET a_profile='$img_name', a_lastname='$a_lastname', a_firstname='$a_firstname', a_middlename='$a_middlename', a_address='$a_address',
					a_occupation='$a_occupation', a_officeAddress='$a_officeAddress', a_driversLicense='$a_driversLicense', a_expirationDate='$a_expirationDate',
					a_class='$a_class', a_placeRegistered='$a_placeRegistered' WHERE a_applicantId='$id'";
		}else{
			$query1 = "UPDATE form1_applicantpd SET a_lastname='$a_lastname', a_firstname='$a_firstname', a_middlename='$a_middlename', a_address='$a_address',
					a_occupation='$a_occupation', a_officeAddress='$a_officeAddress', a_driversLicense='$a_driversLicense', a_expirationDate='$a_expirationDate',
					a_class='$a_class', a_placeRegistered='$a_placeRegistered' WHERE a_applicantId='$id'";
		}
		
		$database->execute($query1);

		$query2 = "DELETE FROM vehicle_information WHERE driver_id='$id' AND driver_type='applicant'";
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
						VALUES('$wheel', '$vehicleMake[$key]', '$plateNo[$key]', '$yearModel[$key]', '$color[$key]', '$motorNo[$key]', '$chassisNo[$key]', '$stickerNo[$key]', '$id', 'applicant')";
			$database->execute($query3);
		}

		header('Location: ../registeredApplicant.php');
	}

?>