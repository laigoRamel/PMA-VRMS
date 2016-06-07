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

		
		<link href='vehiclelog.css' rel='stylesheet' type='text/css' />
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
			<h4>Vehicle Time In</h4>Date: <?php echo $d . "<br>Time: " . $t; ?>
		</div>
	
		
		<div class='container'>
			<div class='row'>
				<div class='col-md-12' align="center">
					<br>
					<form method="POST" action="" id="checkvehicle">
						<table>
							<tr><td>Plate Number: </td><td><input type="text" name="plate" placeholder="AAA####" pattern="[A-Za-z]{3}\d{3}|[A-Za-z]{3}\d{4}|[A-Za-z]{2}\d{4}|[A-Za-z]{2}\d{5}" title="Plate Number format: AAA### or AAA#### or AA##### Conduction Sticker: AA####" 	required /></td><td></td>
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
									
									//check if currently logged in
									$q = "SELECT * FROM client_log WHERE plateNum = '$plate' AND flag=1";
									$results = mysqli_query($conn, $q);
									$num = mysqli_num_rows($results);
									
									if($num>=1){
										echo "<br>Vehicle with plate number <b>" . $plate . "</b> was logged earlier and has not yet logged out";
									}else{
									//IF NOT LOGGED IN CHECK IF THE VEHICLE IS REGISTERED AND ACTIVE
									$query="SELECT * FROM vehicle_information WHERE plateNo = '" . $plate  . "' and status='active'";
									$results = mysqli_query($conn, $query);
									
									if(mysqli_num_rows($results) >= 1){ //REGISTERED
										while($row = mysqli_fetch_assoc($results)){
											$a = strtoupper($row['plateNo']);
											$b = $row['vehicleId'];
											$c = $row['driver_id'];
											$d = $row['driver_type'];
											
											$queryV="SELECT * FROM client_report WHERE plateNum = '" . $plate ."'";
											$resultsV = mysqli_query($conn, $queryV);
											$violations ="";
											
											if(mysqli_num_rows($resultsV) >=1){
												while($row = mysqli_fetch_assoc($resultsV)){
													$violations = $violations . $row['violation'] . " on " . $row['datein'] . "<br>";
												}
											}
											
											
											if($d=='applicant'){
												$qinfo = "SELECT * FROM form1_applicantpd WHERE a_applicantId = $c AND a_status = 'registered'";
												$qinfoR = mysqli_query($conn, $qinfo);	
												if(mysqli_num_rows($qinfoR) >= 1){
													while($r = mysqli_fetch_assoc($qinfoR)){
														$last = $r['a_lastname'];
														$first = $r['a_firstname'];
														$mid = $r['a_middlename'];
														$dL = $r['a_driversLicense'];
													}
													
													echo "<table align='center' id='vLog'><tr><th class='head'>Plate No. </th><th class='head'>Registered Under</th></tr><tr><td class='col'> " . $a . "</td><td class='col'>" . $last . ", ". $first . " " . $mid . "<br>" . $dL ."</td></tr></table><br><table class='vLog2'>";
													if($violations!=""){
														echo "<tr><td>Violations: </td><td>" . $violations .  "</td></tr>";
													}
													echo "<form method='POST' action='timein.php'>";
													echo "<tr><td class='col'>Details: </td><td class='col'> <textarea name='detail' value='' rows='6' cols='35'></textarea></td></tr>";
													echo "</table><br/>";												
													echo "<input type='hidden' name='plate' value='" . $a . "'>
														<input type='hidden' name='owner' value='" . $last . ", " . $first . " " . $mid . "'>
														<input type='hidden' name='lic' value='" . $dL . "'>
														<input type='hidden' name='d' value='" . $d . "'>
														<input type='hidden' name='t' value='" . $t . "'>
														<input type='hidden' name='type' value='Registered'>
														<table><tr><td>
														<button formaction='timein.php'>Time In</button>
														</form></td><td><form method='GET'><button formaction='client_vehiclelog.php'>Cancel</button></form></td></tr></table>";
												}
											
											
											}else if($d=='military'){
												$qinfo = "SELECT * FROM form2_militarypd WHERE m_militaryId = $c AND m_status = 'registered'";
												$qinfoR = mysqli_query($conn, $qinfo);
												if(mysqli_num_rows($qinfoR) >= 1){
													while($r = mysqli_fetch_assoc($qinfoR)){
														$last = $r['m_lastname'];
														$first = $r['m_firstname'];
														$mid = $r['m_middlename'];
														$dL = "";
													}
													
													echo "<table align='center' id='vLog'><tr><th class='head'>Plate No. </th><th class='head'>Registered Under</th></tr><tr><td class='col'> " . $a . "</td><td class='col'>" . $last . ", ". $first . " " . $mid . "<br>" . $dL ."</td></tr></table><br><table class='vLog2'>";
													if($violations!=""){
														echo "<tr><td>Violations: </td><td>" . $violations .  "</td></tr>";
													}
													echo "<form method='POST' action='timein.php'>";
													echo "<tr><td class='col'>Details: </td><td class='col'> <textarea name='detail' value='' rows='6' cols='35'></textarea></td></tr>";
													echo "</table><br/>";												
													echo "<input type='hidden' name='plate' value='" . $a . "'>
														<input type='hidden' name='owner' value='" . $last . ", " . $first . " " . $mid . "'>
														<input type='hidden' name='lic' value='" . $dL . "'>
														<input type='hidden' name='d' value='" . $d . "'>
														<input type='hidden' name='t' value='" . $t . "'>
														<input type='hidden' name='type' value='Registered'>
														<table><tr><td>
														<button formaction='timein.php'>Time In</button>
														</form></td><td><form method='GET'><button formaction='client_vehiclelog.php'>Cancel</button></form></td></tr></table>";
												}
											}
										}
																
									}else{ //NOT REGISTERED
										//GET NEXT AVAILABLE VISITOR ID
										$qvisitor = "SELECT * FROM client_visitorpass WHERE flag=0 ORDER BY vid asc";
										$rvisitor = mysqli_query($conn, $qvisitor);
										$r = mysqli_fetch_array($rvisitor);
										
										$vp = $r[0]; //GET NEXT AVAILABLE VISITOR ID
										
										
										$query="SELECT * FROM client_report WHERE plateNum = '" . $plate ."' and type='visitor'";
										$results = mysqli_query($conn, $query);
										$violations ="";
										
										
										//if(mysqli_num_rows($results) >=3){					
										//	while($row = mysqli_fetch_assoc($results)){
										//		$violations = $violations . $row['violation'] . " on " . $row['datein'] . "<br>";
										//	}
										//	echo "Vehicle with plate number: ". $plate . " incurred maximum number of violations. <br>" . $violations;
										//	echo "<form method='GET'><button formaction='client_vehiclelog.php'>Back</button></form>";
										//}else{		

											if(mysqli_num_rows($results) >=1){
												while($row = mysqli_fetch_assoc($results)){
													$violations = $violations . $row['violation'] . " on " . $row['datein'] . "<br>";
												}
											}
											echo "Vehicle Not Registered <br><br><br>";
											echo "<form method='POST' action='timein.php'><table>
													<tr><td colspan='2'><b>Log as Visitor:</td></tr>
													<tr><td>Visitor Pass ID: </td><td><b>" . $vp . "</td></tr>
													<tr><td>Plate Number: </td><td><b>" . $plate . "</td></tr>";
													if($violations!=""){
														echo "<tr><td>Violations: </td><td>" . $violations .  "</td></tr>";
													}
											echo	"<tr><td>Owner / Driver: </td><td> <input type='text' name='owner' required></td></tr>
													<tr><td>License Number: </td><td> <input type='text' name='lic' pattern='[A-Za-z]{1}\d{10}' title='Drivers License No. format: Single Letter followed by 10 numbers' required></td></tr>
													<tr><td>Details: </td><td> <textarea name='detail' rows='6' cols='21'></textarea></td></tr>
													<input type='hidden' name='vp' value='" . $vp . "'>
													<input type='hidden' name='plate' value='" . $plate . "'>
													<input type='hidden' name='d' value='" . $d . "'>
													<input type='hidden' name='t' value='" . $t . "'>
													<input type='hidden' name='type' value='Visitor'>
													<tr><td align='right'><input type='submit' value='Time In'></form></td>
													
													<td><form method='GET'><button formaction='client_vehiclelog.php'>Cancel</button></form></td></tr></table>";
										//	}
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