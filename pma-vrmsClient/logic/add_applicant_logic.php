<?php 
	require_once('../classes/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		AddApplicantData($_POST['lastname'], $_POST['firstname'], $_POST['middlename'], $_POST['address'], $_POST['occupation'], 
			$_POST['office_address'], $_POST['driver_license'], $_POST['expiration_date']);
		header('Location: ../');
	}
	
	function AddApplicantData($lastname, $firstname, $middlename, $address, $occupation, $office_address, $driver_license, $expiration_date){
		global $database;
		$query = "INSERT personal_data (lastname, firstname, middlename, address, occupation, office_address, driver_license, expiration_date) 
					VALUES ('$lastname', '$firstname', '$middlename', '$address', '$occupation', '$office_address', '$driver_license', '$expiration_date')";
		$database->execute($query);
		$database->disconnect();
	}

?>