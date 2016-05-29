<?php 
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	
	if(isset($_POST)){
		AddForm2Data($_FILES['m_profile'], $_POST['m_lastname'], $_POST['m_firstname'], $_POST['m_middlename'], $_POST['m_rank'], $_POST['m_brSvc'], 
			$_POST['m_afpsn'], $_POST['m_residenceAddress'], $_POST['m_residenceTelNo'], $_POST['m_emailAddress'], $_POST['m_mobileNo'], 
			$_POST['m_designatedOffice'], $_POST['m_officeTelNo'], $_POST['m_officeAddress'], $_POST['m_retirementDate'], $_POST['m_class'], $_POST['m_placeRegistered'], $_POST['wheels'], $_POST['vehicleMake'], $_POST['plateNo'], $_POST['yearModel'], $_POST['color'], $_POST['motorNo'], $_POST['chassisNo'], $_POST['decalNo']);
		header('Location: ../form2.php');
	}
	
	function AddForm2Data($m_profile, $m_lastname, $m_firstname, $m_middlename, $m_rank, $m_brSvc, $m_afpsn, $m_residenceAddress, $m_residenceTelNo, $m_emailAddress, $m_mobileNo, $m_designatedOffice, $m_officeTelNo, $m_officeAddress, $m_retirementDate, $m_class, $m_placeRegistered, $wheels, $vehicleMake, $plateNo, $yearModel, $color, $motorNo, $chassisNo, $decalNo){ 
		global $database;

		move_uploaded_file($m_profile['tmp_name'], "../img/profile/military/".$m_firstname.'-'.$m_lastname.'.png');
		$img_name = $m_firstname.'-'.$m_lastname.'.png';
		
//Add militar
		$requirements = $_POST['requirements'];
		$status = (count($requirements) === 5) ? 'registered' : 'pending'; //status
		$m_renew_status = (count($requirements) === 5) ? '1' : '0'; //status
		$amount = (count($requirements) === 5) ? 350 : 0; //status
		
		$all_requirements = ''; //all submitted requirements
		foreach($requirements as $requirement){
			$all_requirements = $requirement.','.$all_requirements;
		}

		date_default_timezone_set("Asia/Hong_Kong");
		
		$m_dateRegistered = date('Y-m-d H:i:s');

		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");
		$username = $_SESSION['getUser'];

		$query = "INSERT INTO form2_militarypd (m_profile, m_lastname, m_firstname, m_middlename, m_rank, m_brSvc, m_afpsn, m_residenceAddress, m_residenceTelNo, 
					m_emailAddress, m_mobileNo, m_designatedOffice, m_officeTelNo, m_officeAddress, m_retirementDate, m_class, m_placeRegistered, m_submitted_requirements, m_status, m_dateRegistered, m_renew_status, amount, flag) 
				VALUES ('$img_name', '$m_lastname', '$m_firstname', '$m_middlename', '$m_rank', '$m_brSvc', '$m_afpsn', '$m_residenceAddress', '$m_residenceTelNo', 
					'$m_emailAddress', '$m_mobileNo', '$m_designatedOffice', '$m_officeTelNo', '$m_officeAddress', '$m_retirementDate', '$m_class', '$m_placeRegistered', '$all_requirements', '$status', '$m_dateRegistered', '$m_renew_status', '$amount', '1')";
		
		$database->execute($query);

		$full_name = $m_lastname . ', ' . $m_firstname . ' ' . $m_middlename;

		$query2 = "INSERT INTO admin_logs (id, username, activity, curr_date, curr_time)
					VALUES ('', '$username', 'Registered: $full_name (AFP)', '$current_date', '$current_time')";

		$database->execute($query2);



//Add vehicle		
		$query_military = "SELECT m_militaryId FROM form2_militarypd ORDER BY m_militaryId DESC LIMIT 1"; 
		$database->execute($query_military);
		$rows = $database->getResult();
		$result = mysqli_fetch_array($rows);
		$military_id = $result['m_militaryId']; // vehicle id

		for($i=0; $i<count($vehicleMake); $i++){
			$query1 = "INSERT INTO vehicle_information (wheels, vehicleMake, plateNo, yearModel, color, motorNo, chassisNo, decalNo, driver_id, driver_type, flag) 
				VALUES ('$wheels[$i]', '$vehicleMake[$i]', '$plateNo[$i]', '$yearModel[$i]', '$color[$i]', '$motorNo[$i]', '$chassisNo[$i]', '$decalNo[$i]', '$military_id', 'military', '1')";
			
			//var_dump($query1);

			$database->execute($query1);
		}
		//exit();

		$database->disconnect();
	}

?>