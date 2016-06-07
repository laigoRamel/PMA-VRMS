<?php
session_start();
if(!isset($_SESSION['user'])){
		header("location:client_index.php");
}

date_default_timezone_set("Asia/Taipei");
$da = date("Y-m-d");
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
							echo "";
						}
					?>
				  </ul>
			</div>
		</div>
		</div>
			
		<div class="panel panel-default panel-border">	
		<div class="panel-heading"><h4>Vehicle Time In</h4>Date: <?php echo $da . "<br>Time: " . $t; ?></div>
	
		
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
							$l = $_POST['lic'];
							$detail = $_POST['detail'];
							if($type=="Visitor"){
								$l = $_POST['lic'];
								$detail = $_POST['detail'];
								$vp = $_POST['vp'];
								
								$q= "SELECT * from client_report WHERE lic = '$l' AND owner = '$owner'";
								$r = mysqli_query($conn, $q);
								$numvio = mysqli_num_rows($r);
								
								$licCheck = "SELECT * FROM client_log WHERE licenseNo = '$l'";
								$licCheckRes = mysqli_query($conn, $licCheck);
								$numlic = mysqli_num_rows($licCheckRes);
								
								$oCheck = "SELECT * FROM client_log WHERE licenseNo = '$l' AND owner='$owner'";
								$oCheckRes = mysqli_query($conn, $oCheck);
								$numO = mysqli_num_rows($oCheckRes);
								
								$check = $numlic - $numO;
								
							}
							
							$flag = 1;
							$u = $_SESSION['user'];
							
						
							
							$q = "SELECT * FROM client_log WHERE plateNum = '$plate' AND flag=1";
							$results = mysqli_query($conn, $q);
							$num = mysqli_num_rows($results);
								
							if($num==0 and $type=="Registered"){
								$query = "INSERT INTO client_log (plateNum, owner, dateIn, timein, type, licenseNo, details, flag, pIN) VALUES ('$plate', '$owner', '$da', '$t', '$type', '$l', '$detail',  $flag, '$u')";
								$results = mysqli_query($conn, $query);
								echo "<br>Plate Number: <b>" .$plate. "</b> <br>Time in: " . $da. " " . $t;
								echo "<br><form> <button formaction='client_vehiclelog.php'><span class='glyphicon glyphicon-arrow-left'> Back </span></button></form>";
							}else if($num==0 and $type=="Visitor"){
								if($numvio>=3){
									echo "<h5><b>LOG IN NOT ALLOWED</b></h5>";
									echo "The driver, " .$owner. " has maximum number of violations recorded.  ";
									echo "<br><form> <button formaction='client_vehiclelog.php'><span class='glyphicon glyphicon-arrow-left'> Back </span></button></form>";
									
								}else if($check>0){
									echo "<h5><b>LOG IN NOT ALLOWED</b></h5>";
									echo "The Driver's License Number " .$l. " is registered under a different driver";
									echo "<br><form> <button formaction='client_vehiclelog.php'><span class='glyphicon glyphicon-arrow-left'> Back </span></button></form>";
								}else{
									$query = "INSERT INTO client_log (plateNum, owner, dateIn, timein, type, licenseNo, details, flag, vid, pIN) VALUES ('$plate', '$owner', '$da', '$t', '$type', '$l', '$detail', $flag, '$vp', '$u')";
									$results = mysqli_query($conn, $query);
								
									$update = "UPDATE client_visitorpass SET flag=1 WHERE vid='$vp'";
									$uresult = mysqli_query($conn, $update);
									
									echo "<br>Plate Number: <b>" .$plate. "</b> <br>Time in: " . $da . " " . $t;
									echo "<br><form> <button formaction='home.php'><span class='glyphicon glyphicon-arrow-left'> Back </span></button></form>";
								}
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
