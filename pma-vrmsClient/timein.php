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
							echo "<li><a href='client_afterfive.php'>17:00</a></li>";
						}
					?>
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
							if($type=="Visitor"){
								$l = $_POST['lic'];
								$detail = $_POST['detail'];
								$vp = $_POST['vp'];
							}
							
							$flag = 1;
							$u = $_SESSION['user'];
							
							
							$q = "SELECT * FROM log WHERE plateNum = '$plate' AND flag=1";
							$results = mysqli_query($conn, $q);
							$num = mysqli_num_rows($results);
								
							if($num==0 and $type=="Registered"){
								$query = "INSERT INTO log (plateNum, owner, dateIn, timein, type, flag, pIN) VALUES ('$plate', '$owner', '$d', '$t', '$type', $flag, '$u')";
								$results = mysqli_query($conn, $query);
								echo "<br>Plate Number: <b>" .$plate. "</b> <br>Time in: " . $d . " " . $t;
								echo "<br><form> <button formaction='client_vehiclelog.php'><span class='glyphicon glyphicon-arrow-left'> Back </span></button></form>";
							}else if($num==0 and $type=="Visitor"){
								$query = "INSERT INTO log (plateNum, owner, dateIn, timein, type, licenseNo, details, flag, vid, pIN) VALUES ('$plate', '$owner', '$d', '$t', '$type', '$l', '$detail', $flag, '$vp', '$u')";
								$results = mysqli_query($conn, $query);
								
								$update = "UPDATE visitorpass SET flag=1 WHERE vid='$vp'";
								$uresult = mysqli_query($conn, $update);
								
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
