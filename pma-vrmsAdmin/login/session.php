<?php
	$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms');

	session_start();

	$user_check = $_SESSION['login_user'];

	$query = "SELECT username from accounts
				WHERE username='$user_check'";

	$result = mysqli_query($dbc, $query)
				or die('Error querying database.');

	$row = mysqli_fetch_assoc($result);

	$login_session = $row['username'];

	$_SESSION['getUser'] = $login_session;

	if(!isset($login_session)) {
		mysqli_close($dbc);
		header('Location: login_page.php');
	}
?>
