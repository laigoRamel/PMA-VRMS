<?php
date_default_timezone_set("Asia/Taipei");
$d = date("Y-m-d");
$t = date("H:i:s");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PMA Vehicle Monitoring</title>

		<link href='index.css' rel='stylesheet' type='text/css' />
		<link href='format.css' rel='stylesheet' type='text/css' />
		<link href='ext/bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
		
	<!--	<script src='ext/jquery.min.js' type='text/javascript'></script>
		<script src='ext/bootstrap/js/bootstrap.min.js' type='text/javascript'></script> -->
   	 	<link rel="shortcut icon" href="img/seal.png">
	</head>
	
	<body>
		<?php include('client_indexhead.php'); ?>
	
		<div class="panel panel-default panel-border">
		<div class="panel-heading"><h4>User Login</h4></div>

		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<br /><br />
					<form action="index.php" id="clientLogin" method="POST" target="">
					<table align="center" id="login">
						<tr><td>Username:</td><td><input type="text" name="username"></td></tr>
						<tr><td>Password:</td><td><input type="password" name="passw"></td></tr>
						<tr><td colspan="2"><button type='submit' value='Ok' form="clientLogin" class="buttons">Login</button></td></tr>
					</table>
					</form>
					
					<div id="invalid">
					<?php	
							
							if($_SERVER['REQUEST_METHOD'] == 'POST'){
									session_start();
									$host="localhost"; // Host name 
									$username="root"; // Mysql username 
									$password=""; // Mysql password 
									$db_name="clientdb"; // Database name 
									//$tbl_name="equip"; // Table name 

									// Create connection
									$conn = mysqli_connect($host, $username, $password, $db_name);
									// Check connection
									if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
									}
									
									$u=$_POST['username'];
									$p=md5($_POST['passw']);
									
									$query="SELECT * FROM users WHERE username = '" . $u . "' AND password = '" . $p . "'";
									$results = mysqli_query($conn, $query);
									
									echo $u;
									echo $d;
									echo $t;
									
									if(mysqli_num_rows($results) >= 1){
										$_SESSION['user'] = $u;
										$query="INSERT INTO userlog (username, datein, timein, flag) VALUES ('$u', '$d', '$t', 1)";
										$results = mysqli_query($conn, $query);
										header("location:home.php");
									}else{
										echo "Invalid username and password";
									}
							}
						?>
				
						</div>

					

					
				</div>
			</div>
		</div>
		
		<br/>
		</div>
	</div>
	
	
	
	</body>
</html>



