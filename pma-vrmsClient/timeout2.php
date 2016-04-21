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
		<div class="panel-heading"><h4>Vehicle Time Out</h4>Current Date and Time: <?php echo $d . " " . $t; ?> </div>
		
		
		<div class='container'>
			<div class='row'>
				<div class='col-md-12' align="center">


					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
													
							require_once('connect.php');
							
						//	$plate = strtoupper($_POST['plate']);
						//	$owner = $_POST['owner'];
						//	$t = $_POST['t'];
							$u = $_SESSION['user'];
						//	$type = $_POST['type'];
						//	$vp = $_POST['vid'];
							
							$tid = $_POST['tid'];
							$vid = $_POST['vid'];
							$type = $_POST['type'];
							$plate = $_POST['plate'];
						
							$q = "SELECT * FROM client_log WHERE tid='$tid'";
							$results = mysqli_query($conn, $q);
							$num = mysqli_num_rows($results);
							
							if($num>=1){
								$query = "UPDATE client_log SET dateout= '$d', timeout='$t', flag=0, pOUT='$u' WHERE tid = '$tid'";
								$results = mysqli_query($conn, $query);
								
								if($type=='Visitor'){
									$update = "UPDATE client_visitorpass SET flag=0 WHERE vid='$vid'";
									$uresult = mysqli_query($conn, $update);
								}
								echo "<br>Plate Number: <b>" .$plate. "</b> <br>Time Out: " . $d . " " . $t;
								echo "<br><form> <button formaction='client_viewlog.php'><span class='glyphicon glyphicon-arrow-left'> Back </span></button></form>";
						
							}else{
								echo "Vehicle with Plate Number <b>" . $plate . "</b>was logged out earlier";
								echo "<br><form> <button formaction='client_viewlog.php'><span class='glyphicon glyphicon-arrow-left'> Back </span></button></form>";
							}
							

							$q = "SELECT * FROM client_report WHERE plateNum = '$plate' AND flag=1";
							$results = mysqli_query($conn, $q);
							$num = mysqli_num_rows($results);
								
							if($num>=1){
								$query = "UPDATE client_report SET flag=0 WHERE plateNum='$plate' AND flag=1";
								$results = mysqli_query($conn, $query);
							}

							
						}
					?>
					
				</div>
			</div>	
		</div>
	</body>
</html>