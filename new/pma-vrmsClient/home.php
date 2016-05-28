<?php
session_start();
if(!isset($_SESSION['user'])){
		header("location:index.php");
}

date_default_timezone_set("Asia/Taipei");
$d = date("Y-m-d");
$t = date("H:i:s");

require_once('connect.php');
	
	//QUERY
	$query1 = "SELECT * FROM client_log WHERE dateIn between '$d' AND '$d' ORDER BY tid desc";
	$results = mysqli_query($conn, $query1);
	$sr = "Today's Log";

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
	
		
		<div class='container'>
			<div class='row'>
					<div align="center">
						<?php echo "<h3> Today's Vehicle Log : ". $d . " </h3><br>"; ?>
					
					</div>
					
						<?php
							$q = "SELECT * FROM client_log WHERE dateIn BETWEEN '$d' and '$d'";
							$tlog = mysqli_query($conn, $q);
							$totallog = mysqli_num_rows($tlog);
							
							$qq = "SELECT * FROM client_log WHERE (dateIn BETWEEN '$d' and '$d') and flag=1";
							$tlogIn = mysqli_query($conn, $qq);
							$totallogIn = mysqli_num_rows($tlogIn);
							
							$qqq = "SELECT * FROM client_log WHERE (dateIn between '$d' and '$d') and type='Visitor'";
							$tvisit = mysqli_query($conn, $qqq);
							$totalv = mysqli_num_rows($tvisit);
							
							$qqqq = "SELECT * FROM client_log WHERE (dateIn between '$d' and '$d') and type='Visitor' and flag=1";
							$tvisitIn = mysqli_query($conn, $qqqq);
							$totalvIn = mysqli_num_rows($tvisitIn);
							
							$qqqqq = "SELECT * FROM client_log WHERE (dateIn between '$d' and '$d') and type='Registered'";
							$treg = mysqli_query($conn, $qqqqq);
							$totalreg = mysqli_num_rows($treg);
							
							$qqqqqq = "SELECT * FROM client_log WHERE (dateIn between '$d' and '$d') and type='Registered' and flag=1";
							$tregIn = mysqli_query($conn, $qqqqqq);
							$totalregIn = mysqli_num_rows($tregIn);
						
							
						?>
					<div style="float: left" align="right">
						<table name="dash1" border='1'>
							<tr><td rowspan='2'>Total Number of Vehicles Logged</td><td rowspan='2'><?php echo $totallog; ?></td>
								<td>Total Registered Logged</td><td><?php echo $totalreg; ?></td></tr>
								<tr><td>Total Visitors Logged</td><td><?php echo $totalv; ?></td></tr>
						
						</table>
					</div>
					
					<div style="float: right" align="left">
						<table name="dash1" border='1'>
							<tr><td rowspan='2'>Total Number of Vehicles Logged In</td><td rowspan='2'><?php echo $totallogIn; ?></td>
								<td>Total Registered Logged In</td><td><?php echo $totalregIn; ?></td></tr>
								<tr><td>Total Visitors Logged In</td><td><?php echo $totalvIn; ?></td></tr>
						
						</table>
					</div>
				
					<div class='col-md-12' align="center">
					<br>
					
					<?php
							//		echo "<table align='center' id='viewtable'><tr><th class='head' rowspan='2'>Plate No. </th><th class='head' rowspan='2'>Registered Under</th><th class='head' colspan='2'>Time In</th><th class='head' colspan='2'>Time Out</th><th class='head' rowspan='2'>Type</th></tr>";
							//		echo "<tr><th class='head'>Date</th><th class='head'>Time</th><th class='head'>Date</th><th class='head'>Time</th></tr>";
								
							//		echo "<table align='center'><tr><td></td><td></td><td class='head' colspan='2'>Time In</td><td class='head' colspan='2'>Time Out</td><td></td></tr>";
							//		echo "<tr><th class>Plate No. </th><th class='head'>Registered Under</th><th class='head'>Date</th><th class='head'>Time</th><th class='head'>Date</th><th class='head'>Time</th><th class='head'>Type</th></tr>";
									
									echo "<table align='center' class='table-sort table-sort-search table-sort-show-search-count'><thead><tr><th class='table-sort'>Plate No. </th><th class='table-sort'>Registered Under</th><th class='table-sort'>Time IN</th><th class='table-sort'>Time OUT</th><th class='table-sort'>Type</th><th class='table-sort'>Other Details</th><th class='table-sort'>Personnel</th><th class='table-sort'></th></tr></thead>";
								
							
									if(mysqli_num_rows($results) >= 1){
										while($row = mysqli_fetch_assoc($results)){
											$tid = $row['tid'];
											$a = $row['plateNum'];
											$b = $row['owner'];
											$c = $row['dateIn'];
											$d = $row['timein'];
											$e = $row['dateOut'];
											$f = $row['timeout'];
											$g = $row['type'];
											$h = $row['licenseNo'];
											$i = $row['details'];
											$j = $row['vid'];
											$k = $row['pIN'];
											$l = $row['pOUT'];
											
											
											
											if($g=="Visitor"){
												$g = $g . " - ";
											}
											
											if($e=="0000-00-00"){
												$e=""; $f="";
												
												if(strtotime(date("H:i:s"))>strtotime('16:59:59') && $e=="" && $g=="Visitor - "){
													echo "<tr><td class='after'> " . $a . "</td>".
														 "<td class='after'>" . $b . "</td>". 
														 "<td class='after'>" . $c .  "<br>" . $d ."</td>".
														 "<td class='after'>" . $e .  "<br>" . $f. "</td>".
														 "<td class='after'>" . $g. $j . "<br>" . $h . "</td>". 
														 "<td class='after'>" . $i . "</td>".
														 "<td class='after'>" . $k . " / ". $l . "</td>".
														 "<td class='after'><form method='POST' action='timeoutinfo.php'>".
																			"<input type='hidden' name='tid' value='". $tid. "'>".
																			"<input type='hidden' name='vid' value='". $j 	. "'>".
																			"<input type='hidden' name='type' value='". $g 	. "'>".
																			"<input type='hidden' name='plate' value='". $a 	. "'>".
																			"<input type='submit' value='Time Out'> </form></td></tr>";
												}else{
													echo "<tr><td class='col'> " . $a . "</td>".
														 "<td class='col'>" . $b . "</td>".
														 "<td class='col'>" . $c .  "<br>" . $d. "</td>".
														 "<td class='col'>" . $e .  "<br>" . $f."</td>".
														 "<td class='col'>" . $g. $j . "<br>" . $h. "</td>".
														 "<td class='col'>" . $i . "</td>".
														 "<td class='col'>" . $k . " / ". $l . "</td>".
														 "<td class='col'><form method='POST' action='timeoutinfo.php'>".
																			"<input type='hidden' name='tid' value='". $tid. "'>".
																			"<input type='hidden' name='vid' value='". $j 	. "'>".
																			"<input type='hidden' name='type' value='". $g 	. "'>".
																			"<input type='hidden' name='plate' value='". $a 	. "'>".
																			"<input type='submit' value='Time Out'> </form></td></tr>";
												}
											}else{
												if(strtotime(date("H:i:s"))>strtotime('16:59:59') && $e=="" && $g=="Visitor - "){
													echo "<tr><td class='after'> " . $a . "</td>".
														 "<td class='after'>" . $b . "</td>". 
														 "<td class='after'>" . $c .  "<br>" . $d ."</td>".
														 "<td class='after'>" . $e .  "<br>" . $f. "</td>".
														 "<td class='after'>" . $g. $j . "<br>" . $h . "</td>". 
														 "<td class='after'>" . $i . "</td>".
														 "<td class='after'>" . $k . " / ". $l . "</td>".
														 "</tr>";
												}else{
													echo "<tr><td class='col'> " . $a . "</td>".
														 "<td class='col'>" . $b . "</td>".
														 "<td class='col'>" . $c .  "<br>" . $d. "</td>".
														 "<td class='col'>" . $e .  "<br>" . $f."</td>".
														 "<td class='col'>" . $g. $j . "<br>" . $h. "</td>".
														 "<td class='col'>" . $i . "</td>".
														 "<td class='col'>" . $k . " / ". $l . "</td>".
														 "<td class='col'></td></tr>";
												}
											}
										
											
									}
								
									echo "</table>";
									}else{
										echo "<br> No Records.";
									}
									
									
							
						?>
				</div>
		<br/>
		</div>
	</div>

		</body>
</html>