<?php 
	require_once('../db/database.php');
	session_start();
	
	$database = new Database();
	
	if(isset($_POST)){
		//if(isset($_POST['a_class'])){
			AddForm1Data($_FILES['a_profile'], $_POST['a_lastname'], $_POST['a_firstname'], $_POST['a_middlename'], $_POST['a_address'], $_POST['a_occupation'], 
				$_POST['a_officeAddress'], $_POST['a_driversLicense'], $_POST['a_expirationDate'], $_POST['a_class'], $_POST['a_placeRegistered'], $_POST['wheels'], $_POST['vehicleMake'], $_POST['plateNo'], $_POST['yearModel'], $_POST['color'], $_POST['motorNo'], $_POST['chassisNo'], $_POST['stickerNo']);
			header('Location: ../form1.php');
		//}
	}
	
	function AddForm1Data($a_profile, $a_lastname, $a_firstname, $a_middlename, $a_address, $a_occupation, $a_officeAddress, $a_driversLicense, $a_expirationDate, $a_class, $a_placeRegistered, $wheels, $vehicleMake, $plateNo, $yearModel, $color, $motorNo, $chassisNo, $stickerNo){
		global $database;
		
		move_uploaded_file($a_profile['tmp_name'], "../img/profile/applicant/".$a_firstname.'-'.$a_lastname.'.png');
		$img_name = $a_firstname.'-'.$a_lastname.'.png';
//Add vehicle		
		for($i=0; $i<count($vehicleMake); $i++){
			$query1 = "INSERT INTO vehicle_information (wheels, vehicleMake, plateNo, yearModel, color, motorNo, chassisNo, stickerNo) 
				VALUES ('$wheels[$i]', '$vehicleMake[$i]', '$plateNo[$i]', '$yearModel[$i]', '$color[$i]', '$motorNo[$i]', '$chassisNo[$i]', '$stickerNo[$i]')";
			$database->execute($query1);
		}
		
//Add applicant	
		$query_vehicle = "SELECT vehicleId FROM vehicle_information ORDER BY vehicleId DESC LIMIT 1"; 
		$database->execute($query_vehicle);
		$rows = $database->getResult();
		$result = mysqli_fetch_array($rows);
		$vehicle_id = $result['vehicleId']; // vehicle id
		
		$requirements = $_POST['requirements'];
		$status = (count($requirements) === 5) ? 'registered' : 'pending'; //status
		
		$all_requirements = ''; //all submitted requirements
		foreach($requirements as $requirement){
			$all_requirements = $requirement.','.$all_requirements;
		}

		date_default_timezone_set("Asia/Hong_Kong");

		$a_dateRegistered = date('Y-m-d H:i:s');

		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");
		$username = $_SESSION['getUser'];
		
	
		$query = "INSERT INTO form1_applicantpd (a_profile, a_lastname, a_firstname, a_middlename, a_address, a_occupation, a_officeAddress, a_driversLicense, a_expirationDate, a_class, a_placeRegistered, a_submitted_requirements, a_status, a_dateRegistered, a_vehicle_id, a_renew_status) 
				VALUES ('$img_name', '$a_lastname', '$a_firstname', '$a_middlename', '$a_address', '$a_occupation', '$a_officeAddress', '$a_driversLicense', '$a_expirationDate', '$a_class', '$a_placeRegistered', '$all_requirements', '$status', '$a_dateRegistered', '$vehicle_id', '1')";

		$database->execute($query);

		$full_name = $a_lastname . ', ' . $a_firstname . ' ' . $a_middlename;

		$query2 = "INSERT INTO admin_logs (id, username, activity, curr_date, curr_time)
					VALUES ('', '$username', 'Registered: $full_name', '$current_date', '$current_time')";

		$database->execute($query2);

		$database->disconnect();
	}

?>