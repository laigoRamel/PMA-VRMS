<?php
	session_start();
	$error='';

	if (isset($_POST['submits'])) {
		if(empty($_POST['form-username']) || empty($_POST['form-password'])) {
			$error = "Username or Password is invalid";
		} else {
			$username = $_POST['form-username'];
			$password = $_POST['form-password'];

			//$username = mysql_real_escape_string($_POST['form-username']);
			//$password = mysql_real_escape_string($_POST['form-password']);
			//$level = $_POST['form-']

			/*$connection = mysql_connect("localhost", "root", "");

			$db = mysql_select_db("company", $connection);

			//$dbc = mysqli_connect("localhost", "root", "", "company");

			$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);*/

			$dbc = mysqli_connect('localhost', 'root', '', 'pma-vrms');

			$query = "SELECT * FROM accounts
							 WHERE username = '$username'
							 AND password = '$password' ";

			$result = mysqli_query($dbc, $query)
				or die('Error querying database.');

			$rows = mysqli_num_rows($result);

			if($rows == 1) {
				$_SESSION['login_user'] = $username;

				$user = mysqli_fetch_assoc($result);

				$_SESSION['level'] = $user['level'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['office'] = $user['office'];
				$_SESSION['rank'] = $user['rank'];
				$_SESSION['password'] = $user['password'];
				$_SESSION['id'] = $user['id'];

				//var_dump($_SESSION['name']);
				//exit();
				if($_SESSION['level'] === '1'){
					header("location: ../pma-vrmsAdmin/index.php");
					exit();
				}
				/*date_default_timezone_set('Asia/Hong_Kong');
				$time_in = date('Y-m-d H:i:s');
				$user_id = mysqli_fetch_array($result)['id'];
				$query = sprintf("INSERT INTO admin_logs SET user_id='%s', time_in='%s'", $user_id, $time_in);
				mysqli_query($dbc, $query);
				$query = sprintf("SELECT id FROM admin_logs WHERE user_id='%s' AND time_in='%s'", $user_id, $time_in);
				$result = mysqli_query($dbc, $query);
				$_SESSION['log_id'] = mysqli_fetch_array($result)['id'];*/
				//header("location: index.php");
				//exit();
			} else {
				$error = "Username or Password is invalid";
			}
			mysqli_close($dbc);
		}
	}
?>
