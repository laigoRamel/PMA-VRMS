<?php

	$new_password = $_POST['new_password'];

	$query = sprintf("UPDATE accounts SET password='%s' WHERE id='%s'", $new_password, $_SESSION['id']);
	$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms');
	mysqli_query($dbc, $query);
	mysqli_close($dbc);

	header('Location: ../index.php');
	exit();
?>