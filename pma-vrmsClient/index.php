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
		<link href='indexback.css' rel='stylesheet' type='text/css' />
		
		<link href='ext/bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
		
	<!--	<script src='ext/jquery.min.js' type='text/javascript'></script>
		<script src='ext/bootstrap/js/bootstrap.min.js' type='text/javascript'></script> -->
   	 	<link rel="shortcut icon" href="img/seal.png">
	</head>
	
	<body>
	<div id="back">
		<?php include('client_indexhead.php'); ?>
	
		<div class="panel panel-default panel-border">
		<div class="panel-heading"><h4><center>User Login</center></h4></div>

		
			
				<div class='col-md-12'>
					<br /><br />
					<form action="index.php" id="clientLogin" method="POST" target="">
					<table align="center" id="login">
						<tr><td></td><td>
                        <input type="text" id="uname" placeholder="Username" name="username"></td></tr>
						<tr><td></td><td>
                        <input type="password"  placeholder="Password" name="passw"></td></tr>
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
									$db_name="pma-vrms"; // Database name 
									//$tbl_name="equip"; // Table name 

									// Create connection
									$conn = mysqli_connect($host, $username, $password, $db_name);
									// Check connection
									if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
									}
									
									$u=$_POST['username'];
									$p=$_POST['passw'];
									
									$query="SELECT * FROM accounts WHERE username = '" . $u . "' AND password = '" . $p . "' AND level = 2 ";
									$results = mysqli_query($conn, $query);
									
									if(mysqli_num_rows($results) >= 1){
										$_SESSION['user'] = $u;
										$query="INSERT INTO client_userlog (username, datein, timein, flag) VALUES ('$u', '$d', '$t', 1)";
										$results = mysqli_query($conn, $query);
										header("location:home.php");
									}else{
										echo "Invalid username and/or password";
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
	
	
	</div>
	</body>
</html>



