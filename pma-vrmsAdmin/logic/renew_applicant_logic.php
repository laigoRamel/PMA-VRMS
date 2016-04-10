<?php 
	require_once('../db/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		//if(isset($_POST['a_class'])){
			RenewForm1Data();
			header('Location: ../registeredApplicant.php');
		//}
	}
	
	function RenewForm1Data(){
		global $database;
		
//Add applicant	
		
		$requirements = $_POST['requirements'];
		$a_status = (count($_POST['requirements']) === 5) ? 'registered' : 'pending';
		$all_requirements = ''; //all submitted requirements
		foreach($requirements as $requirement){
			$all_requirements = $requirement.','.$all_requirements;
		}

		$a_dateRegistered = date('Y-m-d H:i:s');

		$old_record = "SELECT * FROM form1_applicantpd WHERE a_applicantId='".$_POST['a_applicantId']."'";
		$database->execute($old_record);
		$result = $database->getResult();

		$row = mysqli_fetch_array($result);


		
	
		$query = "INSERT INTO form1_applicantpd (a_profile, a_lastname, a_firstname, a_middlename, a_address, a_occupation, a_officeAddress, a_driversLicense, a_expirationDate, a_class, a_submitted_requirements, a_status, a_dateRegistered, a_vehicle_id, a_renew_status) 
				VALUES ('$row[a_profile]', '$row[a_lastname]', '$row[a_firstname]', '$row[a_middlename]', '$row[a_address]', '$row[a_occupation]', '$row[a_officeAddress]', '$row[a_driversLicense]', '$row[a_expirationDate]', '$row[a_class]', '$all_requirements', '$a_status', '$row[a_dateRegistered]', '$row[a_vehicle_id]', '1')";

		$database->execute($query);

		$update = "UPDATE form1_applicantpd SET a_renew_status='0' WHERE a_applicantId='".$_POST['a_applicantId']."'";
		$database->execute($update);
		$database->disconnect();
	}

?>