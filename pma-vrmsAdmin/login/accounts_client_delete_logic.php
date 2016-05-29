<?php

if(isset($_POST)){
	$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms') or die ('Error connecting to MySQL server.');
	$id = $_POST['id'];
	$query = "UPDATE accounts SET flag='0' WHERE id='$id'";

	mysqli_query($dbc, $query)
      or die ($dbc->error);

    mysqli_close($dbc);
	header('Location: accounts_client_page.php');
	exit();

}


?>