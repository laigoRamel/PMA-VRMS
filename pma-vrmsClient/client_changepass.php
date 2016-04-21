<?php
session_start();
if(!isset($_SESSION['user'])){
		header("location:index.php");
}

date_default_timezone_set("Asia/Taipei");
$d = date("Y-m-d");
$t = date("H:i:s");

require_once('connect.php');
	
	$message ="";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$npass = md5($_POST['npass']);
		$opass = md5($_POST['opass']);
		$u = $_SESSION['user'];
		
		
		$query = "SELECT * from client_users WHERE username='$u' AND password='$opass'";
		$result = mysqli_query($conn, $query);
		
		if(mysqli_num_rows($result)==1){
			$query = "UPDATE client_users SET password='$npass' WHERE username='$u'";
			$result = mysqli_query($conn, $query);
			
			$message = "Password Successfully Changed.";
		}else{
			$message = "Incorrect password.";
		}
		
		
		
		
	}
	
?>
	
<!DOCTYPE html>
<html>
	<head>
   	 <title>Vehicle Log</title>

		<link href='index.css' rel='stylesheet' type='text/css' />
		<link href='format.css' rel='stylesheet' type='text/css' />
		<link href='ext/bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
		
		<script src='ext/jquery.min.js' type='text/javascript'></script>
		<script src='ext/bootstrap/js/bootstrap.min.js' type='text/javascript'></script>
   	 	<link rel="shortcut icon" href="img/seal.png">

		<!-- sorting -->
		<link rel="stylesheet" type="text/css" href="clientcss/tablesort.css">
		<script type="text/javascript" src="clientjs/table.js"></script>
		<script type="text/javascript" src="clientjs/tablesort.js"></script>
		
		
		<script type="text/javascript">
			$(function () {
			$('table.table-sort').tablesort();});
		</script>
		
	</head>
	<body>

		<?php include('client_header.php'); ?>
		
		<div class="panel panel-default panel-border">
		<div class="panel-heading" align="center">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
					<li><a href="client_vehiclelog.php">Vehicle Time In</a></li>
					<li><a href="client_vehicleout.php">Vehicle Time Out</a></li>
					<li><a href="client_viewlog.php">View Vehicle Log</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Violation Reports <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="client_report.php">Create Violation Report</a></li>
						<li><a href="client_viewreport.php">View Violation Report</a></li>
					  </ul>
					</li>
					<?php
						if(strtotime(date("H:i:s"))>strtotime('16:59:59')){
							echo "<li><a href='client_afterfive.php'><font color='red' size='6'>17:00</font></a></li>";
						}else{
						//	echo "<li><a href='client_afterfive.php'>17:00</a></li>";
							echo "";
						}
					?>
				  </ul>
			</div>
		</div>
		</div>
	
		
		<div class="panel panel-default panel-border">
			<div class="panel-heading">
					<h5>Change Password</h5>
			</div>
			
			<div class='container'>
				<div class='row'>
					<div class='col-md-12' align="center">
					<br />
						<form method="POST" action="client_changepass.php">
						<table>
						<tr><td>Change Password for user: <b><?php echo $_SESSION['user']; ?></b><br /></td></tr>
						<tr><td> Old Password:</td><td><input type="password" name="opass"></td></tr>
						<tr><td> New Password:</td><td><input type="password" name="npass"></td></tr>
						<tr><td colspan='2'><input type="submit" value="Change Password"><input type="button" value="Cancel" onclick="location.href='home.php';"></td></tr>
						</table>
						</form>
						<br />
						<br />
						
						<?php echo "<h5>" . $message . "</h5>"; ?>
					</div>
				</div>
			</div>
		</div>
		
		</body>
</html>