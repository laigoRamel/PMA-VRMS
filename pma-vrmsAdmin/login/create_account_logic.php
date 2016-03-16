<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

	/*if(isset($_POST['submit2'])) {

		$lastname = $_POST['last_name'];
		$firstname = $_POST['first_name'];
		$middleInitial = $_POST['middle_initial'];
		$email = $_POST['email'];
		$password = $_POST['password'];*/

		/*$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms');

		$query = "INSERT INTO pending_accounts
					VALUES ('', '$lastname', '$firstname', '$middleInitial',
							'$email', '$password')";

		$result = mysqli_query($dbc, $query)
			or die('Error querying database.');*/
	//}

	$lastname = (isset($_POST['last_name']) ? $_POST['last_name'] : '');
	$firstname = (isset($_POST['first_name']) ? $_POST['first_name'] : '');
	$middleInitial = (isset($_POST['middle_initial']) ? $_POST['middle_initial'] : '');	
	$email = (isset($_POST['email']) ? $_POST['email'] : '');
	$password = md5(isset($_POST['password']) ? $_POST['password'] : '');

	$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms');

		/*$query = "INSERT INTO pending_accounts (id, last_name, first_name, middle_initial, email, password)
					VALUES ('', '$lastname', '$firstname', '$middleInitial',
							'$email', '$password')";*/

		/*$query = "INSERT INTO pending_accounts (id, last_name, first_name, " . 
					"middle_initial, email, password) " . 
					"VALUES ('', '$lastname', '$firstname', 'middle_initial', ".
					"'$email', '$password')";*/

		$query = "INSERT INTO admin_pending_accounts (id, last_name, first_name, middle_initial, email, password)" . 
					"VALUES ('', '$lastname', '$firstname', '$middleInitial', '$email', '$password')";

		$result = mysqli_query($dbc, $query)
			or die('Error querying database.');

	echo "Thank you for registering! Please wait for account approval. <br />";
	echo "<a href=../login_page.php>Back to Login Page</a>";

	mysqli_close($dbc);
?>