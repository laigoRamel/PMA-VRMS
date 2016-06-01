<?php 
	require_once('../classes/database.php');
	
	$database = new Database();
	
	if(isset($_POST)){
		EditApplicantData($_POST['lastname'], $_POST['firstname'], $_POST['middlename'], $_POST['address'], $_POST['occupation'], 
			$_POST['office_address'], $_POST['driver_license'], $_POST['expiration_date']);
		header('Location: ../');
	}
	
	function EditApplicantData($lastname, $firstname, $middlename, $address, $occupation, $office_address, $driver_license, $expiration_date){
		global $database;
		$id = $_POST['personal_dataId'];
		
		$query = "UPDATE personal_data SET lastname='$lastname', firstname='$firstname', middlename='$middlename', address='$address',
					occupation='$occupation', office_address='$office_address', driver_license='$driver_license', expiration_date='$expiration_date'
					WHERE personal_dataId='$id'";
		$database->execute($query);
		$database->disconnect();
	}

?>