<?php
session_start();
if(!isset($_SESSION['user'])){
		header("location:index.php");
}

date_default_timezone_set("Asia/Taipei");
$d = date("Y-m-d");
$t = date("H:i:s");
?>

<!DOCTYPE html>
<html>
	<head>
   	 <title>Reports</title>

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
			<!--<nav class="menu">
				<a href="client_vehiclelog.php"> Vehicle Time In <a>|
				<a href="client_vehicleout.php"> Vehicle Time Out</a> |
				<a href="client_viewlog.php"> View Vehicle Log</a> | 
				
				<a href="client_viewlog.php" id="active" data-toggle="dropdown" role="button"> Reports</a>
				 <ul class="dropdown-menu">
					<li><a href="index.php">CampAllen/NavyBase Forms</a></li>
					<li><a href="afp_home.php">AFP Forms</a></li>
				  </ul>
				
			</nav></div>-->
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
			<h4>Create Report</h4>Date: <?php echo $d . "<br>Time: " . $t; ?>
		</div>
	
		
		<div class='container'>
			<div class='row'>
				<div class='col-md-12' align="center">
					<br>
					<form method="POST" action="client_report.php" id="createreport">
						<table>
							<tr><td>Plate Number: </td><td><input type="text" name="plate" placeholder="AAA####" pattern="[A-Za-z]{3}\d{3}|[A-Za-z]{3}\d{4}|[A-Za-z]{2}\d{4} |[A-Za-z]{2}\d{5}" title="Plate Number format: AAA### or AAA#### or Conduction Sticker: AA####" required/></td></tr>
							<tr><td><br>Violation: </td><td><br><input list="vio" name="vio" required><datalist id="vio" required>
												
												<option value="Disregarding Traffic Signs"></option>
												<option value="Driving without License"></option>
												<option value="Failure to use Seatbelt"></option>
												<option value="Fake Driver's License"></option>
												<option value="Fake ID/Permit/Sticker"></option>
												<option value="Involved in Accident"></option>
												<option value="No Crash Helmet"></option>
												<option value="No Plate"></option>
												<option value="Overspeeding"></option>
												<option value="Smoke Belching"></option>
												<option value="Unauthorized Improvised Plate"></option>
												
												</datalist></td></tr>
												
  
							<tr><td colspan="2"><br><button type="submit" form="createreport">
								<span class="glyphicon glyphicon-ok"> Record Report</span>
								</button></td></tr>
						</table>
					</form>
					
					<br/>					
					
					<div align="center">
					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
								
									require_once('connect.php');
									
									$plate=strtoupper($_POST['plate']);
									$vio = $_POST['vio'];

									
									$query="SELECT * FROM client_log WHERE plateNum = '" . $plate  . "' AND flag=1";
									$results = mysqli_query($conn, $query);
									
									if(mysqli_num_rows($results) >= 1){
										while($row = mysqli_fetch_assoc($results)){
											$owner = $row['owner'];
											$type = $row['type'];
											$lic = $row['licenseNo'];
											$d = $row['dateIn'];
											$t = $row['timein'];
										}			
										
										$query="INSERT INTO client_report (plateNum, owner, lic, datein, timein, violation, type, flag) VALUES ('$plate', '$owner','$lic', '$d' , '$t', '$vio', '$type', 1)";
										$results = mysqli_query($conn, $query);?>
										<script type="text/javascript">location.href = 'client_viewreport.php';</script>
										//header("location:client_viewreport.php");<?php
									}else{
										echo "Vehicle is not logged in.";
									}		
									
									
									
									
									//header("location:client_report.php");
							}
						?>
						</div>
					
					
								
					
				</div>
			</div>
		</div>
		
		<br/>
		</div>
	

		</body>
</html>