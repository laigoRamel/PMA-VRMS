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
		<div class="panel-heading">
			<h4>Vehicle Time In</h4>Date: <?php echo $d . "<br>Time: " . $t; ?>
		</div>
	
		
		<div class='container'>
			<div class='row'>
				<div class='col-md-12' align="center">
					<br>
					<form method="POST" action="" id="checkvehicle">
						<table>
							<tr><td>Plate Number: </td><td><input type="text" name="plate" placeholder="AAA####" /></td><td></td>
							<td colspan="2"><button type="submit" form="checkvehicle">
								<span class="glyphicon glyphicon-ok"> Check Plate Number</span>
								</button></td></tr>
						</table>
					</form>
					
					<br/>					
					
					<div align="center">
					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
								
									require_once('connect.php');
									
									$plate=strtoupper($_POST['plate']);
									
									$query="SELECT * FROM records WHERE plateNo = '" . $plate  . "'";
									$results = mysqli_query($conn, $query);
									
									if(mysqli_num_rows($results) >= 1){
										while($row = mysqli_fetch_assoc($results)){
											$a = $row['plateNo'];
											$b = $row['owner'];
											$c = $row['remarks'];
					
											echo "<table align='center' id='vLog'><tr><th class='head'>Plate No. </th><th class='head'>Registered Under</th><th class='head'>Remarks</th></tr><tr><td class='col'> " . $a . "</td><td class='col'>" . $b . "</td><td class='col'>" . $c .	"</td></tr><table><br>";
																						
											echo "<form method='POST' action='timein.php'>
													<input type='hidden' name='plate' value='" . $a . "'>
													<input type='hidden' name='owner' value='" . $b . "'>
													<input type='hidden' name='d' value='" . $d . "'>
													<input type='hidden' name='t' value='" . $t . "'>
													<input type='hidden' name='type' value='Registered'>
													<button formaction='timein.php'>Time In</button>
													</form><form method='GET'><button formaction='client_vehiclelog.php'>Cancel</button></form>";
											
									}
									}else{
										
										
										$query="SELECT * FROM report WHERE plateNum = '" . $plate ."' and type='visitor'";
										$results = mysqli_query($conn, $query);
										
										if(mysqli_num_rows($results) >=3){
											echo "Visitor incurred maximum number of violations.";
											echo "<form method='GET'><button formaction='client_vehiclelog.php'>Back</button></form>";
										}else{
										echo "Vehicle Not Registered <br><br><br>";
										echo "<form method='POST' action='timein.php'><table>
												<tr><td colspan='2'><b>Log as Visitor:</td></tr>
												<tr><td>Plate Number: </td><td><b>" . $plate . "</td></tr>
											    <tr><td>Owner / Driver: </td><td> <input type='text' name='owner'></td></tr>
												<input type='hidden' name='plate' value='" . $plate . "'>
												<input type='hidden' name='d' value='" . $d . "'>
												<input type='hidden' name='t' value='" . $t . "'>
												<input type='hidden' name='type' value='Visitor'>
												<tr><td align='right'><input type='submit' value='Time In'></td>
												</form><form method='GET'>
												<td><button formaction='client_vehiclelog.php'>Cancel</button></form></td></tr></table>";
										}
									}
									
									
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