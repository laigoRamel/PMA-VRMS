<?php
	session_start();

	if(session_destroy()) {
		/*date_default_timezone_set('Asia/Hong_Kong');
		$log_id = $_SESSION['log_id'];
		$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms');
		$query = sprintf("UPDATE admin_logs SET time_out='%s' WHERE id='%s'", date('Y-m-d H:i:s'), $log_id);
		mysqli_query($dbc, $query);*/
		header("Location: ../login_page.php");
	}
?>
