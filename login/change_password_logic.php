<?php
	session_start();
	$new_password = $_POST['new_password'];
	$id = $_SESSION['id'];
	$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms');
	$query = sprintf("UPDATE accounts SET password='%s' WHERE id='%s'", $new_password, $id);
	mysqli_query($dbc, $query);
	mysqli_close($dbc);

	header('Location: ../pma-vrmsAdmin/index.php');
	exit();
?>
