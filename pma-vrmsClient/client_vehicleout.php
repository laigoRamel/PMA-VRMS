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
						//	echo "<li><a href='client_afterfive.php'>17:00</a></li>";
							echo "";
						}
					?>
				  </ul>
			</div>
		</div>
		</div>
		
		<div class="panel panel-default panel-border">
		<div class="panel-heading"><h4>Vehicle Time Out</h4>Current Date and Time: <?php echo $d . " , " . $t; ?> </div>
		
		
		<div class='container'>
			<div class='row'>
				<div class='col-md-12' align="center">
					<br>
					<form method="POST" action="" id="checkvehicle">
						<table>
							<tr><td>Plate Number: </td><td><input type="text" name="plate" placeholder="AAA####" pattern="[A-Za-z]{3}\d{3}|[A-Za-z]{3}\d{4}|[A-Za-z]{2}\d{4}" title="Plate Number format: AAA### or AAA#### or Conduction Sticker: AA####" required /></td><td></td>
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
									
									
									$query="SELECT * FROM client_log WHERE plateNum = '" . $plate  . "' and flag=1";
									$results = mysqli_query($conn, $query);
									
									if(mysqli_num_rows($results) >= 1){
										while($row = mysqli_fetch_assoc($results)){
											$a = $row['plateNum'];
											$b = $row['owner'];
											$c = $row['dateIn'];
											$d = $row['timein'];
											$e = $row['type'];
											$f = $row['vid'];
											$g = $row['details'];
										}	
											
										$query="SELECT * FROM client_report WHERE plateNum = '" . $plate  . "'";
										$results = mysqli_query($conn, $query);
										$vio ="";
										if(mysqli_num_rows($results) >= 1){
											while($row = mysqli_fetch_assoc($results)){
												$vio = $vio . $row['violation'] . " on " . $row['datein'] . "<br>";
											}
										}else{
											$vio = "";
										}
										
											if($e=="Visitor"){
											echo "<table align='center' id='vLog'><tr><th class='head'>Visitor ID</th><th class='head'>Plate No. </th><th class='head'>Registered Under</th><th class='head'>Last Login</th><th class='head'>Details</th><th class='head' width='100'>Violation</th></tr><tr><td class='col'> " . $f ."<td class='col'> " . $a . "</td><td class='col'>" . $b . "</td><td class='col'>" . $c . " " . $d .	"</td><td class='col'>" . $g ."</td><td class='col'>" . $vio . "</td></tr><table><br>";
																						
											echo "<form method='POST' action='timeout.php'>
													<input type='hidden' name='type' value='" . $e . "'>
													<input type='hidden' name='vid' value='" . $f . "'>
													<input type='hidden' name='plate' value='" . $a . "'>
													<input type='hidden' name='owner' value='" . $b . "'>
													<input type='hidden' name='d' value='" . $c . "'>
													<input type='hidden' name='t' value='" . $t . "'>
													<button formaction='timeout.php'>Time Out</button>
													</form><form method='GET'><button formaction='client_vehicleout.php'>Cancel</button></form>";
											}else{
												echo "<table align='center' id='vLog'><tr><th class='head'>Plate No. </th><th class='head'>Registered Under</th><th class='head'>Last Login</th><th class='head'>Violation</th></tr><tr><td class='col'> " . $a . "</td><td class='col'>" . $b . "</td><td class='col'>" . $c . " " . $d .	"</td><td class='col'>" . $vio . "</td></tr><table><br>";
																						
												echo "<form method='POST' action='timeout.php'>
													<input type='hidden' name='type' value='" . $e . "'>
													<input type='hidden' name='vid' value='" . $f . "'>
													<input type='hidden' name='plate' value='" . $a . "'>
													<input type='hidden' name='owner' value='" . $b . "'>
													<input type='hidden' name='d' value='" . $c . "'>
													<input type='hidden' name='t' value='" . $t . "'>
													<button formaction='timeout.php'>Time Out</button>
													</form><form method='GET'><button formaction='client_vehicleout.php'>Cancel</button></form>";
											}
										
									}else{
										$query2="SELECT * FROM client_log WHERE plateNum = '" . $plate  . "' and flag=0 ORDER BY tid DESC LIMIT 1";
										$results = mysqli_query($conn, $query2);
										
										if(mysqli_num_rows($results) >= 1){
										echo "Vehicle with Plate Number <b>" . $plate . "</b> was already logged out.<br>";
										while($row = mysqli_fetch_assoc($results)){
											$a = $row['plateNum'];
											$b = $row['owner'];
											$c = $row['dateIn'];
											$d = $row['timein'];
											$e = $row['dateOut'];
											$f = $row['timeout'];
							
					
											echo "<table align='center' id='vLog'><tr><th class='head'>Plate No. </th><th class='head'>Registered Under</th><th class='head'>Last Time Out</th></tr><tr><td class='col'> " . $a . "</td><td class='col'>" . $b . "</td><td class='col'>" .  $e . " , " . $f.	"</td></tr><table><br>";
											
										}
										
										
										
										}else{
											echo "Vehicle with Plate Number <b>" . $plate . "</b> is not Logged In";
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
	</div>

		</body>
</html>