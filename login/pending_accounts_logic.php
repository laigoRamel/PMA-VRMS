
<?php
	$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms');

	$query = "SELECT id, first_name, email FROM admin_pending_accounts";

	$result = mysqli_query($dbc, $query)
		or die('Error querying database.');

	mysqli_close($dbc);
?>