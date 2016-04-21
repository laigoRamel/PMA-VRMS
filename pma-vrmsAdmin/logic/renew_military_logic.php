<?php 
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	//$username = $login_session;
	
	if(isset($_POST)){
		RenewForm2Data();
		header('Location: ../registeredAFP.php');
	}
	
	function RenewForm2Data(){ 
		global $database;

//Add military
		
		$requirements = $_POST['requirements'];

		$m_status = (count($requirements) === 5) ? 'registered' : 'pending'; //status
		
		$all_requirements = ''; //all submitted requirements
		foreach($requirements as $requirement){
			$all_requirements = $requirement.','.$all_requirements;
		}
		
		$m_dateRegistered = date('Y-m-d H:i:s');

		$old_record = "SELECT * FROM form2_militarypd WHERE m_militaryId='".$_POST['m_militaryId']."'";
		$database->execute($old_record);
		$result = $database->getResult();

		$row = mysqli_fetch_array($result);

		$query = "INSERT INTO form2_militarypd (m_profile, m_lastname, m_firstname, m_middlename, m_rank, m_brSvc, m_afpsn, m_residenceAddress, m_residenceTelNo, 
					m_emailAddress, m_mobileNo, m_designatedOffice, m_officeTelNo, m_officeAddress, m_retirementDate, m_class, m_submitted_requirements, m_status, m_dateRegistered, m_placeRegistered, m_vehicle_id, m_renew_status) 
				VALUES ('$row[m_profile]', '$row[m_lastname]', '$row[m_firstname]', '$row[m_middlename]', '$row[m_rank]', '$row[m_brSvc]', '$row[m_afpsn]', '$row[m_residenceAddress]', '$row[m_residenceTelNo]', 
					'$row[m_emailAddress]', '$row[m_mobileNo]', '$row[m_designatedOffice]', '$row[m_officeTelNo]', '$row[m_officeAddress]', '$row[m_retirementDate]', '$row[m_class]', '$all_requirements', '$m_status', '$row[m_dateRegistered]', '$row[m_placeRegistered]', '$row[m_vehicle_id]', '1')";
		
		$database->execute($query);

		$update = "UPDATE form2_militarypd SET m_renew_status='0' WHERE m_militaryId='".$_POST['m_militaryId']."'";
		$database->execute($update);

		date_default_timezone_set("Asia/Hong_Kong");

		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");

		$username = $_SESSION['getUser'];
		//$username = 'hehe';

		//$full_name = $a_lastname . ', ' . $a_firstname . ' ' . $a_middlename;

		$full_name = $row['m_lastname'] . ', ' . $row['m_firstname'] . ' ' . $row['m_middlename'];

		/*$query2 = "INSERT INTO admin_logs (id, username, activity, curr_date, curr_time)
					VALUES ('', '$username, 'Renewed: $full_name (AFP)', '$current_date', '$current_time')";*/

		$query2 = "INSERT INTO admin_logs (id, username, activity, curr_date, curr_time)
					VALUES ('', '$username', 'Renewed: $full_name (AFP)', '$current_date', '$current_time')";

		$database->execute($query2);

		$database->disconnect();
	}

?>