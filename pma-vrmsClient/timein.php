<?php
session_start();
if(!isset($_SESSION['user'])){
		header("location:client_index.php");
}

date_default_timezone_set("Asia/Taipei");
$d = date("Y-m-d");
$t = date("H:i:s");
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

		
	</head>
	<body>

		<?php include('client_header.php'); ?>
		
		<div class="panel panel-default panel-border">
		<div class="panel-heading" align="center">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="client_vehiclelog.php">Vehicle Time In</a></li>
					<li><a href="client_vehicleout.php">Vehicle Time Out</a></li>
					<li><a href="client_viewlog.php">View Vehicle Log</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="client_report.php">Create Report</a></li>
						<li><a href="client_viewreport.php">View Report</a></li>
					  </ul>
					</li>
					<li><a href="client_afterfive.php">17:00</a></li>
				  </ul>
			</div>
		</div>
		</div>
			
		<div class="panel panel-default panel-border">	
		<div class="panel-heading"><h4>Vehicle Time In</h4>Date: <?php echo $d . "<br>Time: " . $t; ?></div>
	
		
		<div class='container'>
			<div class='row'>
				<div class='col-md-12' align="center">

					<div align="center">
					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
													
							require_once('connect.php');
							
							$plate = strtoupper($_POST['plate']);
							$owner = $_POST['owner'];
							$d = $_POST['d'];
							$t = $_POST['t'];
							$type = $_POST['type'];
							$flag = 1;
							
							
							$q = "SELECT * FROM log WHERE plateNum = '$plate' AND flag=1";
							$results = mysqli_query($conn, $q);
							$num = mysqli_num_rows($results);
								
							if($num==0){
								$query = "INSERT INTO log (plateNum, owner, dateIn, timein, type, flag) VALUES ('$plate', '$owner', '$d', '$t', '$type', $flag)";
								$results = mysqli_query($conn, $query);
								echo "<br>Plate Number: <b>" .$plate. "</b> <br>Time in: " . $d . " " . $t;
								echo "<br><form> <button formaction='client_vehiclelog.php'><span class='glyphicon glyphicon-arrow-left'> Back </span></button></form>";
							}else{
								echo "<br>Vehicle with plate number <b>" . $plate . "</b> was logged earlier and has not yet logged out";
								echo "<br><form> <button formaction='client_vehiclelog.php'><span class='glyphicon glyphicon-arrow-left'> Back </span></button></form>"; 
							}
														
						}
					?>
		</div>
			</div>
		</div>
		
		<br/>
		</div>
	</div>

		</body>
</html>				
