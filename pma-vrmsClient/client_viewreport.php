<?php
	session_start();
	if(!isset($_SESSION['user'])){
			header("location:client_index.php");
	}

	date_default_timezone_set("Asia/Taipei");
	$d = date("Y-m-d");
	$t = date("H:i:s");

	require_once('connect.php');
	
	//QUERY
	$query1 = "SELECT * FROM client_report ORDER BY rid desc";
	$results = mysqli_query($conn, $query1);
	$sr = "All Records";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$sd = $_POST['sdate'];
			$ed = $_POST['edate'];
			$sr = "Records from " .$sd . " to " . $ed ;
			//$field = $_POST['field'];

			
			$query = "SELECT * FROM client_report WHERE datein BETWEEN '$sd' AND '$ed'";
			$results = mysqli_query($conn, $query);
			
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
			$('table.table-sort').tablesort();
		});
		
		function setdate(){
			var x = document.getElementById("sdate").value;
			document.getElementById("edate").min = x;
		}
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
			<h4>Vehicle Log</h4>Date: <?php echo $d . "<br>Time: " . $t; ?>
		</div>
	
		
		<div class='container'>
			<div class='row'>
				<div class='col-md-12' align="center">
					<br>
					
				<!--	<form method="POST" action="client_viewreport.php" id="client_viewreport">
						<table id="search">
							<tr><td>Keyword: </td><td><input type="text" name="keyword" /></td>
							<td colspan="2"><button type="submit" form="client_viewreport">
								<span class="glyphicon glyphicon-search"> Search</span>
								</button></td></tr>
						</table>
					</form> -->
					
					<form method="POST" action="" id="client_viewreport.php">
						<table id="search">
							<tr><td>Filter by date:</td></tr>
							<tr><td>From: </td><td><input type="date" id="sdate" name="sdate" onchange="setdate()" /></td>
								<td>To: </td><td><input type="date" id="edate" name="edate" ></td>
							<td><button type="submit" form="client_viewreport.php">
								<span class="glyphicon glyphicon-search"> Filter</span>
								</button></td></tr>
						</table>
					</form>
					
					<br>
					<h4> <?php echo $sr; ?></h4>
					<br/>					
					
					<div id="view" style="overflow-y:auto;">
					<?php
									echo "<table align='center' class='table-sort table-sort-search table-sort-show-search-count'><thead><tr><th class='table-sort'>Plate No. </th><th class='table-sort'>Registered Under</th><th class='table-sort'>Date</th><th class='table-sort'>Time</th><th class='table-sort'>Violation</th><th class='table-sort'>Type</th><th class='table-sort'>License No.</th><th class='table-sort'>Details</th></tr></thead>";
									
									if(mysqli_num_rows($results) >= 1){
										while($row = mysqli_fetch_assoc($results)){
											$a = $row['plateNum'];
											$b = $row['owner'];
											$c = $row['datein'];
											$d = $row['timein'];
											$e = $row['violation'];
											$f = $row['type'];
                                            
											
											$query2 = "SELECT * FROM client_log WHERE plateNum = '$a' and dateIn = '$c'";
											$results2 = mysqli_query($conn, $query2);
											
											if(mysqli_num_rows($results2) >= 1){
												while($row = mysqli_fetch_assoc($results2)){
													$g = $row['licenseNo'];
													$h = $row['details'];
												}
											}
											
											echo "<tr><td class='col'> " . $a . "</td><td class='col'>" . $b . "</td><td class='col'>" . $c . "</td><td class='col'>" . $d ."</td><td class='col'>" . $e ."</td><td class='col'>" . $f. "</td><td class='col'>" . $g. "</td><td class='col'>" . $h. "</td></tr>";
																						
										
									}
									echo "</table>";
									}else{
										echo "<br> No Records.";
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