<?php

if(isset($_POST)){
	$id = $_POST['id'];
	$username = $_POST['username'];
	$name = $_POST['name'];
	$office = $_POST['office'];
	$rank_type = $_POST['rank_type'];
	$rank = $_POST['rank'];
	$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms') or die ('Error connecting to MySQL server.');
	$query = "UPDATE accounts SET name='$name', username='$username', office='$office', type='$rank_type', rank='$rank' WHERE id='$id'";

	mysqli_query($dbc, $query)
      or die ($dbc->error);

    mysqli_close($dbc);

	header('Location: accounts_admin_page.php');
	exit();

}


?>