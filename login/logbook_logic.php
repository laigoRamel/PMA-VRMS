<?php
		$handler = mysqli_connect('localhost', 'root', '', 'pma-vrms');
		
		$query = 'SELECT admin_users.username, admin_logs.time_in, admin_logs.time_out 
					FROM admin_logs JOIN admin_users 
					WHERE admin_users.id = admin_logs.user_id 
					ORDER BY admin_logs.time_in';
		
		$result = mysqli_query($handler, $query);
		
		$record = array();
		
		while($row = mysqli_fetch_array($result)){
				array_push($record, array('username' 
					=> $row['username'], 'time_in' 
					=> $row['time_in'], 'time_out' 
					=> $row['time_out']));
		}


?>
